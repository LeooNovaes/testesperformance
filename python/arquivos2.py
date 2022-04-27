import time

start = time.time()

arquivo = open('arq1.txt', 'w')

for i in range(10000):
    arquivo.write('teste de arquivos\n')
    pass

arquivo.close()

end = time.time()

print((end - start)*1000)
