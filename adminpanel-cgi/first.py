#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()

db = pymysql.connect(host="localhost",user="root",password="",database="practise" )

print("Content-type: text/html\r\n")
cursor = db.cursor()
form = cgi.FieldStorage()

email = form.getvalue('email')
password = form.getvalue('password')

sql="select email,password from register where email='"+email+"' AND password='"+password+"' "

if(cursor.execute(sql)):
    db.commit()
    cursor.execute("SELECT * from register")
# Fetch a single row using fetchone() method.
    data = cursor.fetchall()
    for row in data:
        id = row[0]
        username = row[1]
        email = row[2]
        password = row[3]
       
        # Now print fetched result
        print ("Id=%s,Username=%s,Email=%s,Password=%s" % (id,username,email,password))
        print("<a href='updatenew.py?id=%d'>Edit | </a><a href='delete.py?id=%d'>Delete</a><br>" %(id,id))
        print("<br/>")
else:
    db.commit()
    print("Content-type: text/html\r\n")
    print("<html>")
    print("<body>")
    print("<h2>Login fail</h2>")
    print("</body>")
    print("</html>")


# disconnect from server
db.close()
