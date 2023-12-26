import mysql.connector
import csv
import os


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="chocolate_db"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM chocolate")

myresult = mycursor.fetchall()
i=0
for row in myresult:
    if row[0]<=100:
        print(row[0], row[1])
        i +=1
        os.rename(f'../chocolate_images/{row[1]}.jpg', f'../chocolate_images/result/{row[1]}.jpg')
print(i)


path = os.getcwd()
print(path)
a=os.listdir("../chocolate_images/")

print(a)
# with open('product_db.csv', 'w',encoding='utf-8-sig') as csvfile:
#     for row in myresult:
#         for i in row:
#          csvfile.write(f"{row[0]},{row[1]}")
#         csvfile.write(",")