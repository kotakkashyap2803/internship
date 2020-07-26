from flask import Flask, render_template, request
import mysql.connector
import json

app = Flask(__name__)

def getConnection():
	mydb = mysql.connector.connect(
		host="localhost",
		user="root",
		password="",
		database="demo"
	)
	return mydb

@app.route('/login', methods=['POST'])
def taskMain():
	dbcon = getConnection()
	uname = request.form['uname']
	passw = request.form['pass']
	dict = {
		"Input" : {
		"username" : uname,
		"password" : passw
		},
		"Output" : {
			"code" : 0,
			"msg" : ""
		}
	}
	finalres = None
	flag = 0
	flag1 = 0
	for char in uname:
		if char.isdigit() == True:
			flag1 = 1
			break
	if flag1 == 1:
		dict["Output"]["code"] = 203
		dict["Output"]["msg"] = "Faliure : Only characters allowed in Username"
		finalres = json.dumps(dict)
	else:
		if len(passw) >= 6:
			for char in passw:
				if char.isdigit() == True:
					flag = 1
					break
			if flag == 1:
				cur = dbcon.cursor()
				query1 = "SELECT USERNAME, PASSWORD FROM userdetails"
				cur.execute(query1,dbcon)
				res = cur.fetchall()
				for x in res:
					if x[0] == uname and x[1] == passw:
						dict["Output"]["code"] = 200
						dict["Output"]["msg"] = "Success"
						# Here the session creation statement will come or the session creating function will be called
					else:
						dict["Output"]["code"] = 204
						dict["Output"]["msg"] = "Faliure : Wrong Username or Password"
						# Here whatever according to requirement
			else:
				dict["Output"]["code"] = 202
				dict["Output"]["msg"] = "Faliure : Password should be have atleast 1 character and 1 number"
		else:
			dict["Output"]["code"] = 201
			dict["Output"]["msg"] = "Faliure : Password should be of length 6"
		finalres = json.dumps(dict)
	return finalres

if __name__ == '__main__':
	app.run(debug=True)