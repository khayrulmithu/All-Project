import mysql.connector

import datetime

x = datetime.datetime.now()
dat = x.strftime("%d-%m-%y")

conn = mysql.connector.connect(host='localhost',user='root',password='',database='mydb')

cursor = conn.cursor()

obj = int(object_type);

point = reward_value[obj]
cat = class_name[obj]
num = str(ph_num)


query1 = " select * from user where num = %s or nid = %s "
val = (num,'00000')
cursor.execute(query1,val)

row = cursor.fetchone()
    
#print(row[1])
name = row[1]

point3 = int(row[5])
point2 = point3 + point



query2 = "update user set points = %s where num = %s "
val = (point2,num)

cursor.execute(query2,val)


query2 = "insert into points (name,points,cat,dat) values(%s, %s, %s, %s) "
val = (name,point,cat,dat)

cursor.execute(query2,val)


conn.commit()

cursor.close()

conn.close()




