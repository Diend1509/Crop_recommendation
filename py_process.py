import numpy as np
import pandas as pd
import pickle
import sys
from sklearn import metrics
from sklearn import tree
from sklearn.tree import DecisionTreeClassifier
import warnings
warnings.filterwarnings('ignore');

model = pickle.load(open('classifierxx','rb'));
data =  np.array([[ sys.argv[1], sys.argv[2], sys.argv[3], sys.argv[4], sys.argv[5], sys.argv[6], sys.argv[7] ]]).reshape(1, -1)
prediction = model.predict(data)


print(prediction)

crop_dict = {1: "Rice", 2: "Maize", 3: "Jute", 4: "Cotton", 5: "Coconut", 6: "Papaya", 7: "Orange", 8: "Apple", 9: "Muskmelon", 10: "Watermelon", 11: "Grapes", 12: "Mango", 13: "Banana", 14: "Pomegranate", 15: "Lentil", 16: "Blackgram", 17: "Mungbean", 18: "Mothbeans", 19: "Pigeonpeas", 20: "Kidneybeans", 21: "Chickpea", 22: "Coffee"}

if prediction[0] in crop_dict:
    crop = crop_dict[prediction[0]]
print(crop)