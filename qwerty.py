import sys
from sklearn import svm
from sklearn import datasets
from sklearn.model_selection import train_test_split

i=0
data=[0,0,0,0]
for x in sys.argv[1:]:
    data[i] = float(x)
    i=i+1
slen =data[0]
swid =data[1]
plen =data[2]
pwid =data[3]

iris = datasets.load_iris()
X = iris.data
Y = iris.target
X_train,X_test,Y_train,Y_test = train_test_split(X,Y,test_size=0.2,random_state=4)
model = svm.SVC(kernel='linear', C = 1.0)
model.fit(X_train,Y_train)
accuracy = model.score(X_test,Y_test)
prediction = model.predict([[slen,swid,plen,pwid]])
print(prediction)
#response= json.dumps([X_train,Y_train,X_test,Y_test], cls=NumpyEncoder)
#print(response)
