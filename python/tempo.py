import time

start = time.time()

for i in range(100000):
    print(i)

end = time.time()

print((end - start)*1000)