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
print(nse)
i = 1
while i < 6:
    q = nse.get_quote('LT')
    print(q["lastPrice"])
    sql = "UPDATE LT SET Price = %s WHERE name=%s"
    val = (q["lastPrice"], "LT")
    mycursor.execute(sql, val)
    mydb.commit()
    print(mycursor.rowcount, "record(s) affected")