
"""
Created on Fri Apr 23 20:26:44 2021

@author: LekenoTR
"""
import pandas as pd
import dash
import os
import base64
import dash_core_components as dcc
import dash_html_components as html
import dash_bootstrap_components as dbc
import plotly.express as px
from dash.dependencies import Input, Output


mapbox_access_token = 'pk.eyJ1IjoidGVib2hvbGVrZW5vIiwiYSI6ImNrbnE3cW9ybjBhN3UycHBmemYxMWVtencifQ.p9ZpEWxK3Hupdklm17QVJg'


#reading the data file
substations = pd.read_excel(
    os.getcwd()+'\\source_data.xlsx', 
    sheet_name='SUBSTATIONS', usecols=[0,4,5,6,8,9]) 


substations['Marks'] = 1

slider = "range_slider"

image_filename = 'logo3.png'
encoded_image = base64.b64encode(open(image_filename, 'rb').read())

app = dash.Dash(__name__, external_stylesheets=[dbc.themes.UNITED])

logo_card = html.Div(dbc.CardImg(src='data:image/png;base64,{}'.format(encoded_image.decode())))

substations_card = dbc.Card([
    dbc.CardHeader("Power Source"),
    dbc.CardBody(
        [
            dcc.Dropdown(
                id = 'power-generators',
                options = [
                    {'label' :'Wind', 'value' :'Wind'},
                    {'label' :'PV', 'value' :'PV'}, 
                    {'label' :'Both', 'value' :'Both'}
                ],
                value = 'Wind'
           )
        ] 
    )
])

radio_card = dbc.Card([
    dbc.CardHeader("Select Slider Type"),
    dbc.CardBody(
        [
            dcc.RadioItems(
                id = 'slider-type',
                options = [
                    {'label':'Single Slider', 'value': 'slider'},
                    {'label':'Range Slider', 'value': 'range_slider'}
                ], 
                value = None,
                inputStyle={"margin-right": "20px"},
                labelStyle = {'margin-left':'60px', 'margin-right':'40px'}
            )
        ]
    )
])

rangeSlider_card = dbc.Card([
    dbc.CardHeader("Study Year"),
    dbc.CardBody(
        [
            radio_card, html.Br(),
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
        ]
    )
])

slider_card = dbc.Card([
    dbc.CardHeader("Study Year"),
    dbc.CardBody(
        [
            radio_card, html.Br(),
            dcc.Slider(
                id = 'study-year',
                min = substations["Year"].min(),
                max = substations["Year"].max(),
                value = substations["Year"].min(),
                marks = {i: str(i) for i in range(substations["Year"].max()+1)}
            )
        ]
    )
])


if slider == "range_slider":
    app.layout = dbc.Container([
        dbc.Row([
            dbc.Col([logo_card, html.Br(), substations_card, html.Br(), rangeSlider_card 
                     ], width = 4),
        
        dbc.Col([html.Br(),
            dbc.Card(dcc.Graph(id='graph', figure = {}, config={'displayModeBar': False, 'scrollZoom': True},
                style={'height':'93vh'})) 
        ], width = 8)
        ], justify = 'around')
    ], fluid = True)
else:
    app.layout = dbc.Container([
        dbc.Row([
            dbc.Col([html.Br(), logo_card, html.Br(), substations_card, html.Br(), slider_card 
                     ], width = 4),
        
        dbc.Col([html.Br(),
            dcc.Graph(id='graph2', figure = {}, config={'displayModeBar': False, 'scrollZoom': True},
                style={'height':'93vh'}) 
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
    
    
    fig = px.scatter_mapbox(substations_final, lat = "Y", lon = "X", 
                            hover_name = "MTS", hover_data = ["Type", "Megawatts"],
                            color = "Megawatts", zoom = 5, size = "Marks", size_max=10,
                            center={"lat": -28.28, "lon": 24.40})
    
    fig.update_layout (mapbox_style = 'basic'
                       , mapbox_accesstoken = mapbox_access_token, 
                        margin={"r": 2,"t":2,"l":2,"b":2}, 
                        paper_bgcolor = 'rgba(0,0,0,0)',
                        plot_bgcolor = 'rgba(0,0,0,0)')

    return fig

@app.callback(Output('graph2', 'figure'),
              [Input('power-generators', 'value'),
               Input('study-year', 'value')])

def update_figure2(chosen_generator,chosen_study_year):
    substations_copy = substations[substations['Type'] == chosen_generator]
    substations_final =  substations_copy[
        substations_copy['Year'] == chosen_study_year]
    
    
    fig = px.scatter_mapbox(substations_final, lat = "Y", lon = "X", 
                            hover_name = "MTS", hover_data = ["Type", "Megawatts"],
                            color = "Megawatts", zoom = 5, size = "Marks", size_max=10,
                            center={"lat": -28.28, "lon": 24.40}, 
                            paper_bgcolor = 'rgba(0,0,0,0)',
                            plot_bgcolor = 'rgba(0,0,0,0)')
    
    fig.update_layout (mapbox_style = 'basic'
                       , mapbox_accesstoken = mapbox_access_token, 
                        margin={"r": 2,"t":2,"l":2,"b":2})

    return fig
    

if __name__ == '__main__':
    app.run_server(debug=False)
