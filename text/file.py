import os
path = os.getcwd()
print(path)
a=os.listdir("images/")


g=len(a)

for i in range(0, g):
    filename = a[i].rsplit(".jpg",1)[0]
    print(f'{filename}')
    os.rename(f'./images/{a[i]}', f'./images/result/{filename}')
print(g)