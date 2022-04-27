import mysql.connector
import time

start = time.time()

query = "INSERT INTO python_bloco (nome, telefone) VALUES"

for i in range(100):
    query += f"('Leo{i}', '123'),"

query = query[:-1]

conn = mysql.connector.connect(user='root', password='', host='localhost', database='teste_performance')

with conn.cursor() as cursor:
    cursor.execute(query)
    conn.commit()

conn.close()

end = time.time()

print("Tempo: ", 1000 * (end - start))