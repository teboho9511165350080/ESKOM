
"""
Created on Fri Apr 23 20:26:44 2021

@author: LekenoTR
"""
import pandas as pd
import dash
import os
import dash_core_components as dcc
import dash_html_components as html
import dash_bootstrap_components as dbc
import plotly.express as px
from dash.dependencies import Input, Output

import plotly.graph_objs as go

mapbox_access_token = 'pk.eyJ1IjoidGVib2hvbGVrZW5vIiwiYSI6ImNrbnE3cW9ybjBhN3UycHBmemYxMWVtencifQ.p9ZpEWxK3Hupdklm17QVJg'


#reading the data file
substations = pd.read_excel(
    os.getcwd()+'\\source_data.xlsx', 
    sheet_name='SUBSTATIONS', usecols=[0,4,5,6,8,9]) 

#creating dictionery for colurs
colors = {1: '#8B0000', 2: '#FF0000', 3: '#FFA500', 4: '#FF8C00', 5: '#7CFC00',
          6: '#458B00'}

#Adding colur column of data file for each substation based on Megawatts
substations['colors'] = substations.apply(
                    lambda x: list(colors.values())[int(x['Megawatts']/50-1)],
                    axis =1)

app = dash.Dash(__name__, external_stylesheets=[dbc.themes.SPACELAB])

app.layout = dbc.Container([
                    
    dbc.Row([
        dbc.Col(html.H1("PV & Solar Power Over Years for Selected Eskom Substations",
                        className = 'text-center text-primary'), 
                width = 12)
    ], justify = "around"),
    
    dbc.Row([
        dbc.Col([
            
            html.Ul([
                html.Li("50MW", className='square', style={'background': list(colors.values())[0]}),
                html.Li("100MW", className='circle', style={'background': list(colors.values())[1]}),
                html.Li("150MW", className='circle', style={'background': list(colors.values())[2]}),
                html.Li("200MW", className='circle', style={'background': list(colors.values())[3]}),
                html.Li("250MW", className='circle', style={'background': list(colors.values())[4]}),
                html.Li("300MW", className='circle', style={'background': list(colors.values())[5]}),
            ]),
            
            html.Br(),
            dcc.Dropdown(
                id = 'power-generators',
                options = [
                    {'label' :'Wind', 'value' :'Wind'},
                    {'label' :'PV', 'value' :'PV'}, 
                    {'label' :'Both', 'value' :'Both'}
                ],
                value = 'Wind'
            ), 
            
            html.Br(),
            dcc.RangeSlider(
                id = 'study-years',
                min = substations["Year"].min(),
                max = substations["Year"].max(),
                value = [substations["Year"].min(),substations["Year"].min()+1],
                dots = True,
                allowCross = False,
                disabled = False,
                pushable = 1,
                updatemode = 'mouseup',
                
                marks = {i: str(i) for i in range(substations["Year"].max()+1)}
            )
        ], width = 4),
        
       dbc.Col([
            dcc.Graph(id='graph', figure = {}, config={'displayModeBar': False, 'scrollZoom': True},
                style={'height':'93vh'}
             ) 
       ], width = 8)
    ], justify = 'around')
], fluid = True)


# Output of Graph
@app.callback(Output('graph', 'figure'),
              [Input('power-generators', 'value'),
               Input('study-years', 'value')])

def update_figure(chosen_generator,chosen_study_year):
    substations_copy = substations[substations['Type'] == chosen_generator]
    substations_final =  substations_copy[(substations_copy['Year'] >= chosen_study_year[0])&(
        substations_copy['Year'] <= chosen_study_year[1])]
    
    
        # Create figure
    locations=[go.Scattermapbox(
                    lon = substations_final['X'],
                    lat = substations_final['Y'],
                    mode='markers',
                    marker={'color' : substations_final['colors'], 'size':10},
                    unselected={'marker' : {'opacity':1, 'size':10}},
                    selected={'marker' : {'opacity':0.5, 'size':25}},
                    hoverinfo='text',
                    hovertext=substations_final['MTS']+'<br>'+substations_final['Type']

    )]
    
    
        # Return figure
    return {
        'data': locations,
        'layout': go.Layout(
            uirevision= 'foo', #preserves state of figure/map after callback activated
            clickmode= 'event+select',
            hovermode='closest',
            hoverdistance=2,
            title=dict(text="Eskom substations mapping",font=dict(size=25, color='green')),
            mapbox=dict(
                accesstoken=mapbox_access_token,
                bearing=0,
                style='dark',
                center=dict(
                    lat= -29.087217,
                    lon= 26.154898
                ),
                pitch=0,
                zoom=4.7
            ),
        )
    }


if __name__ == '__main__':
    app.run_server(debug=False)
