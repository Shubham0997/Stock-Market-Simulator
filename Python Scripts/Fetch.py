import mysql.connector
from nsetools import Nse

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="stock"
)

mycursor = mydb.cursor()

nse = Nse()
print (nse)
#q = nse.get_quote('INDUSINDBK')
#print(q["lastPrice"])

#sql = "INSERT INTO INDUSINDBK (Name,Price) VALUES (%s,%s)"
#val = ("INDUSINDBK", "567")
#mycursor.execute(sql, val)
#mydb.commit()
#print(mycursor.rowcount, "record(s) affected")

i = 1
while i < 6:
    q = nse.get_quote('RELIANCE')
    print(q["lastPrice"])
    sql = "UPDATE reliance SET Price = %s WHERE name=%s"
    val = (q["lastPrice"],"Reliance")
    mycursor.execute(sql, val)
    mydb.commit()
    print(mycursor.rowcount, "record(s) affected")
