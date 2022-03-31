import os
filePath = 'F:\gitrepo\imagerepo\webp'
os.listdir(filePath)
# print(os.listdir(filePath))
txt = os.listdir(filePath)
# print(len(txt),"\n",txt[11])

file_handle = open('F:\gitrepo\imagerepo\webp\webp.txt', mode='w')
for i in range(len(txt)):
    file_handle.write("https://cdn.jsdelivr.net/gh/capabler1/imagerepo@1.0/webp/"+txt[i-1]+"\n")
file_handle.close()
