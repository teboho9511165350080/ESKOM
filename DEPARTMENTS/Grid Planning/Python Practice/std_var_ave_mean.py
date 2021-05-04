# -*- coding: utf-8 -*-
"""
Created on Tue Mar 30 09:34:06 2021

@author: LekenoTR
"""

import numpy as np



def calculate(list):
  arr = np.array(list)

  if (len(list) == 9):
    arr = arr.reshape(3,3)
    calculations = {
    'mean': [(np.average(arr, axis = 0)).tolist(), (np.average(arr, axis = 1)).tolist(), (np.average(arr)).tolist()],
    'variance': [(np.var(arr, axis = 0)).tolist(), (np.var(arr, axis = 1)).tolist(), (np.var(arr)).tolist()],
    'standard deviation': [(np.std(arr, axis = 0)).tolist(), (np.std(arr, axis = 1)).tolist(), (np.std(arr)).tolist()],
    'max': [(np.max(arr, axis = 0)).tolist(), (np.max(arr, axis = 1)).tolist(), (np.max(arr)).tolist()],
    'min': [(np.min(arr, axis = 0)).tolist(), (np.min(arr, axis = 1)).tolist(), (np.min(arr)).tolist()],
    'sum': [(np.sum(arr, axis = 0)).tolist(), (np.sum(arr, axis = 1)).tolist(), (np.sum(arr)).tolist()]
    }
  else:
      raise ValueError('List must contain nine numbers.')

  return calculations
