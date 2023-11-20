import mysql.connector

conn = mysql.connector.connect(host='localhost',user='root',password='',database='mydb')

cursor = conn.cursor()



bin1 = 10
bin2 = 50
bin3 = 20
bin4 = 80
bin5 = 65

weight1 = 200
weight2 = 300
weight3 = 400
weight4 = 500
weight5 = 600

id=2

# new suru

query3 = "update capa set bin1 = %s,bin2 = %s,bin3 = %s,bin4 = %s,bin5 = %s where id=id "
val = (bin1,bin2,bin3,bin4,bin5)

cursor.execute(query3,val)

query4 = "update wt set bin1 = %s,bin2 = %s,bin3 = %s,bin4 = %s,bin5 = %s where id=id "
val = (weight1,weight2,weight3,weight4,weight5)

cursor.execute(query4,val)

# new sesh



conn.commit()

cursor.close()

conn.close()


