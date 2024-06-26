import mysql.connector
import pandas as pd

def get_database_connection():
    connection = mysql.connector.connect(
        host='127.0.0.1',
        user='root',
        password='',
        database='venue_booking'
    )
    return connection

def get_data_from_db():
    connection = get_database_connection()
    query = ""
    data = pd.read_sql(query, connection)
    connection.close()
    return data
