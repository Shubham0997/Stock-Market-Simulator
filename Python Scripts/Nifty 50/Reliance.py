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
    try:
        q = nse.get_quote('ADANIPORTS')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE adaniports SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "ADANIPORTS")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('ASIANPAINT')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE ASIANPAINT SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "ASIANPAINT")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('AXISBANK')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE AXISBANK SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "AXISBANK")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('BAJAJ-AUTO')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE BAJAJAUTO SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "BAJAJ-AUTO")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('BAJAJFINSV')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE BAJAJFINSV SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "BAJAJFINSV")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('BAJFINANCE')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE BAJFINANCE SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "BAJFINANCE")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('BHARTIARTL')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE BHARTIARTL SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "BHARTIARTL")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('BPCL')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE BPCL SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "BPCL")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('BRITANNIA')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE britannia SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "BRITANNIA")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('CIPLA')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE CIPLA SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "CIPLA")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('COALINDIA')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE COALINDIA SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "COALINDIA")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('DIVISLAB')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE DIVISLAB SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "DIVISLAB")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('DRREDDY')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE DRREDDY SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "DRREDDY")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('EICHERMOT')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE EICHERMOT SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "EICHERMOT")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('GAIL')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE GAIL SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "GAIL")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('GRASIM')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE GRASIM SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "GRASIM")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('HCLTECH')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE HCLTECH SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "HCLTECH")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('HDFC')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE HDFC SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "HDFC")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('HDFCBANK')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE HDFCBANK SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "HDFCBANK")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('HDFCLIFE')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE HDFCLIFE SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "HDFCLIFE")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('HEROMOTOCO')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE HEROMOTOCO SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "HEROMOTOCO")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('HINDALCO')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE HINDALCO SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "HINDALCO")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('HINDUNILVR')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE HINDUNILVR SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "HINDUNILVR")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('ICICIBANK')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE ICICIBANK SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "ICICIBANK")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('INDUSINDBK')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE INDUSINDBK SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "INDUSINDBK")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('INFY')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE infy SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "INFY")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('IOC')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE IOC SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "IOC")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('ITC')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE ITC SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "ITC")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('JSWSTEEL')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE JSWSTEEL SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "JSWSTEEL")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('KOTAKBANK')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE KOTAKBANK SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "KOTAKBANK")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('LT')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE LT SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "LT")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('M&M')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE mahindraandmahindra SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "M&M")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('MARUTI')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE MARUTI SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "MARUTI")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('NESTLEIND')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE NESTLEIND SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "NESTLEIND")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('NTPC')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE NTPC SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "NTPC")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('ONGC')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE ONGC SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "ONGC")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('POWERGRID')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE POWERGRID SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "POWERGRID")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('Reliance')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE Reliance SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "Reliance")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('SBILIFE')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE sbilife SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "SBILIFE")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('SBIN')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE SBIN SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "SBIN")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('SHREECEM')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE SHREECEM SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "SHREECEM")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('SUNPHARMA')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE sunpharma SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "SUNPHARMA")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('TATAMOTORS')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE TATAMOTORS SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "TATAMOTORS")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('TATASTEEL')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE TATASTEEL SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "TATASTEEL")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('TCS')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE tcs SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "TCS")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('TECHM')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE techmahindra SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "TECHM")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('TITAN')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE TITAN SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "TITAN")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('ULTRACEMCO')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE ULTRACEMCO SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "ULTRACEMCO")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('UPL')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE UPL SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "UPL")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

        q = nse.get_quote('WIPRO')
        print(q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"])
        sql = "UPDATE WIPRO SET Price = %s, Open = %s, High = %s, Low = %s WHERE name=%s"
        val = (q["lastPrice"], q["open"], q["dayHigh"], q["dayLow"], "WIPRO")
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record(s) affected")

    except :
        print("An error has occurred")
        continue
