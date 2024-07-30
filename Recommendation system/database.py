import mysql.connector
import pandas as pd

def get_database_connection():
    connection = mysql.connector.connect(
        host='localhost',
        user='root',
        password='',
        database='ultra-venues'
    )
    return connection

def get_venue_data():
    connection = get_database_connection()
    query = "SELECT * FROM venues"
    data = pd.read_sql(query, connection)
    connection.close()
    return data
