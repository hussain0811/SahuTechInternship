from flask import Flask, render_template, request
import numpy as np
import pandas as pd
import keras
from keras.layers import *
from tensorflow.keras.applications.resnet50 import preprocess_input
from keras.preprocessing import image
from keras.models import *
import pickle
import os
from os import listdir
from os.path import isdir
from werkzeug.wrappers import Request, Response

app = Flask(__name__)

model = load_model('model.h5')
model2 = pickle.load(open('model2.pkl', 'rb'))


@app.route('/')
def main():
    return render_template('index.html')


@app.route('/display', methods=['POST'])
def display():
    PATH = os.getcwd()+'\\input_images\\'
    if (not os.path.isdir(PATH)):
        os.mkdir(PATH)
    imagefile = request.files['imagefile']
    temp1 = PATH + imagefile.filename
    imagefile.save(temp1)
    img = image.load_img(temp1, target_size=(224, 224))
    x = image.img_to_array(img)
    x = np.expand_dims(x, axis=0)
    img_data = preprocess_input(x)
    predict = model.predict(img_data)
    return render_template('page2.html', tabledata=predict, model=1)


@app.route('/display2', methods=['POST'])
def display2():
    arr = []
    arr.append(request.form['a'])
    arr.append(request.form['b'])
    arr.append(request.form['c'])
    arr.append(request.form['d'])
    arr.append(request.form['e'])
    arr.append(request.form['f'])
    arr.append(request.form['g'])

    predict = model2.predict([arr])
    print(predict)
    return render_template('page2.html', tabledata=predict, model=2)


if __name__ == '__main__':
    app.run(debug=True)
    from werkzeug.serving import run_simple
    run_simple('localhost', 9000, app)
