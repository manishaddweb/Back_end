#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()
form = cgi.FieldStorage()

print("Content-type:text/html\r\n\r\n")

id=form.getvalue('id')
db = pymysql.connect(host="localhost",user="root",password="",database="practise")

cursor = db.cursor()
 
try:
	cursor.execute("delete from register where id=%s" %(id))
	db.commit()
	print("Data Deleted")
except:
    db.rollback()
    print("error in deleting")

db.close()