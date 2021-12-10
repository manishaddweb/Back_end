#!/usr/bin/python3
import pymysql
import cgi,cgitb
db = pymysql.connect(host="localhost",user="root",password="",database="practise" )
print("Content-type:text/html\r\n\r\n")
# prepare a cursor object using cursor() method
cursor = db.cursor()

# execute SQL query using execute() method.
cursor.execute("SELECT * from register")
# Fetch a single row using fetchone() method.
data = cursor.fetchall()
html_template="""<html>
<head>
<title>FETCH</title>
</head>
<body>
    <table border=2>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
    </table>
</body>
</html>"""
for row in data:
	id = row[0]
	username = row[1]
	email = row[2]
	password = row[3]

	# Now print fetched result
	print ("Id=%s,Username=%s,Email=%s,Password=%s" % (id,username,email,password))
	print("<br/>")
# disconnect from server
db.close()
