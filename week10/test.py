import pymysql

connection = pymysql.connect(
    host="localhost",
    user="root",
    password="",
    database="mydatabase"
)
#insert = "create database mydatabase"
#insert = "create table custombers (name VARCHAR(255), address VARCHAR(255))"
"""
insert = "insert into custombers (name,address) values('John','Highway 21')"
cursor = connection.cursor()
cursor.execute(insert)

try:
    cursor.execute(insert)
    connection.commit()
    print(cursor.rowcount, "record inserted.")
"""
s1 = "select name, address FROM custombers"
cursor = connection.cursor()
try:
    cursor.execute(s1)
    result = cursor.fetchall()
    for x in result:
        print(x)
except:
    connection.rollback() 

