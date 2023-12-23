from flask import Flask, render_template, request, redirect
from flask_cors import CORS, cross_origin
import pickle
import pandas as pd
import numpy as np

app = Flask(__name__)
cors = CORS(app)
model = pickle.load(open('Prediction\LinearRegressionModel.pkl', 'rb'))
data = pd.read_csv('Prediction\Cleaned_data.csv')


@app.route('/', methods=['GET', 'POST'])
def index():
    location = sorted(data['location'].unique())
    city = sorted(data['city'].unique())
    bedrooms = sorted(data['bedrooms'].unique())
    Area_Size = data['Area_Size'].unique()

    city.insert(0, 'Select City')
    return render_template('index.html', location=location, city=city, bedrooms=bedrooms, Area_Size=Area_Size)


@app.route('/predict', methods=['POST'])
@cross_origin()
def predict():
    location = request.form.get('location')

    city = request.form.get('city')
    bedrooms = int(request.form.get('bedrooms'))
    Area_Size = int(request.form.get('Area_Size'))
    bath = int(request.form.get('baths'))

    prediction = model.predict(pd.DataFrame(columns=['location', 'city', 'bedrooms', 'baths', 'Area Size'],
                                            data=np.array([location, city, bedrooms, bath, Area_Size]).reshape(1, 5)))
    print(prediction)

    return str(np.round(prediction[0], 0))


if __name__ == '__main__':
    app.run()
