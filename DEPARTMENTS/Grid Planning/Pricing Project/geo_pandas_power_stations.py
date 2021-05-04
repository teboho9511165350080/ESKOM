# -*- coding: utf-8 -*-
"""
Created on Mon Nov 11 14:04:39 2019

@author: TshipaM
"""

#http://darribas.org/gds15/content/labs/lab_03.html

import os
import pandas as pd
import geopandas as gpd
import matplotlib.pyplot as plt

os.chdir('C:\\MyPricing\\Tx Pricing\\GIZ Eskom collaboration\\24 Oct 2019\\GGPLOTS\\Shapefile')

south_africa = gpd.read_file('SOU-level_1.shp')
powerstation = gpd.read_file('POWERSTATION.shp')
transmission  = gpd.read_file('MTS_LINE_VIEW.shp')
substations = gpd.read_file('SUBSTATION.shp')


sublist = sorted(substations['ID'].to_list())

ipplist = ['ARIES', 'AURORA', 'BACCHUS', 'BIGHORN', 'BOUNDARY',
 'DELPHI', 'FERRUM', 'GARONA', 'GRASSRIDGE', 'HARVARD', 'HELIOS', 'HYDRA',
 'JUNO', 'KRONOS', 'MULDERSVLEI', 'NAMA', 'OLIEN', 'PAULPUTS',
 'PEMBROKE', 'POSEIDON', 'RUIGTEVALLEI', 'SASOLII', 'TABOR', 'WITKOP']


substations = substations[substations['ID'].isin(ipplist)]

#Join powerstation and substations dataframes
all_powerstations = pd.concat([powerstation, substations])


cost = pd.read_csv('generator_cost.csv', header=[0], encoding = "ISO-8859-1")
powerstation_new = pd.merge(all_powerstations, cost, on='ID')

powerstation_new['positive'] = powerstation_new['Allocated_Costs'] > 0
powerstation_new = powerstation_new[powerstation_new['Allocated_Costs'] != 0]
powerstation_new_2 = powerstation_new.copy()

f, ax = plt.subplots(1, figsize=(36, 36))
south_africa.geometry.boundary.plot(color=None,edgecolor='k',linewidth = 2,ax=ax) #Use your second dataframe
powerstation_new.plot(axes=ax, column='Allocated_Costs',
                      color=powerstation_new['positive'].map({True: 'g', False: 'r'}),
                      markersize=500)

powerstation_new_2.plot(axes=ax, label='ID')


transmission.plot(axes=ax)

f.suptitle('South Africa')
ax.set_axis_off()
plt.show()


#vmin=powerstation_new['Allocated_Costs'].min()
#vmax=powerstation_new['Allocated_Costs'].max()

