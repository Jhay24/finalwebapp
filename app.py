from flask import Flask, render_template, request
import numpy as np
import pickle

app =Flask(__name__)

@app.route("/",)
def hello():
    return render_template("index.html")


@app.route("/sub", methods = ["POST"])
def submit():
    # Html to py
    
    if request.method == "POST":
        
        name = request.form["Name"]
        section = request.form["Section"]
        id_num = request.form["ID-Number"]


    return render_template("hometest.html", n = name, s = section, id = id_num )


   


@app.route('/predict', methods = ["POST"])
def predict():
    # if request.method == "POST":

     if request.method == 'POST':
      result = request.form
      i = 0
      print(result)
      res = result.to_dict(flat=True)
      print("res:",res)
      arr1 = res.values()
      arr = ([value for value in arr1])

      data = np.array(arr)

      data = data.reshape(1,-1)
      print(data)
      loaded_model = pickle.load(open("OvR_Model85.pkl", 'rb'))
      predictions = loaded_model.predict(data)

     # return render_template('testafter.html',a=predictions)
      
      print(predictions)
      pred = loaded_model.predict_proba(data)
      roles = ["Animation and Motion Design","Web and Mobile Development","Service Managemnet Program","Intelligent System"] 
      # pred = [[0.1234,0.4321,0.2468,0.1977]] #values dito ay mang gagaling sa ML

      # convert muna naten sa dictionary 
      # para alam naten kung anong pwesto nung bawat value bago isort
      new_pred = dict() 
      for index,value in enumerate(pred[0]):
        new_pred[index] = value
      print("new pred:",new_pred)

      # sort naman naten, array ang laman nito
      sorted_pred = sorted(new_pred.values())
      print('sorterd_pred:' ,new_pred)  

      pwestuhan = []
      for index, value in enumerate(sorted_pred):
          for j in new_pred:
              if value == new_pred[j]:
                  pwestuhan.append(j)

      data1 = []
      for i in pwestuhan:
          data1.append(roles[i])
      return render_template("testafter.html",pred=pred[0],roles=roles)










if __name__=="__main__":
     app.run( debug=True)
  