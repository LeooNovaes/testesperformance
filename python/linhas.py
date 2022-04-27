# Import da biblioteca:
import mysql.connector
import time

start = time.time()

# Conexão com o banco de dados:
conexao = mysql.connector.connect(user='root', password='', host='localhost', database='teste_performance')

# Cria um cursor:
cursor = conexao.cursor()

# Executa o comando:
for i in range(100):
  query = f"INSERT INTO python_linha(nome, telefone) VALUES ('Leo {i}', '123 {i}')"
  with conexao.cursor() as cursor:
    cursor.execute(query)
    conexao.commit()

# Finaliza a conexão
conexao.close()

end = time.time()

print((end - start)*1000)