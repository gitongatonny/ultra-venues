import mysql.connector
import pandas as pd

def get_database_connection():
    connection = mysql.connector.connect(
        host='127.0.0.1',  # Your XAMPP MySQL host
        user='root',  # Your MySQL username (default is 'root' for XAMPP)
        password='',  # Your MySQL password (default is empty for XAMPP)
        database='venue_booking'  # Your database name
    )
    return connection

def get_data_from_db():
    connection = get_database_connection()
    query = """
    SELECT b.user_id, b.venue_id, b.rating
    FROM bookings b
    JOIN users u ON b.user_id = u.user_id
    JOIN venues v ON b.venue_id = v.venue_id
    """
    data = pd.read_sql(query, connection)
    connection.close()
    return data
