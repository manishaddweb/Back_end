#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()

form = cgi.FieldStorage()

db = pymysql.connect(host="localhost",user="root",password="",database="practise" )

cursor = db.cursor()
print("Content-type:text/html\r\n\r\n")

id=form.getvalue('id')
name= form.getvalue('username')
email = form.getvalue('email')
password = form.getvalue('password')

try:
	cursor.execute("update register set username='%s',email='%s',password='%s' where id=%s" %(name,email,password,id))
	db.commit()	   
	print("Data Updated")
except:
    db.rollback()
    print("error in Updating")
db.close()