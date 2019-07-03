import zipfile

z = zipfile.ZipFile('D:/test.zip', 'r')
z.extractall(path="C:/Users/Administrator/Desktop")
z.close()
