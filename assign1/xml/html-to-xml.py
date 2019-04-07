import os

cwd = os.getcwd()
files = os.listdir(cwd)

for f in files :
    if ".html" in f :
        f_name = f[0:-5]
        to_xml = f_name + ".xml"
        os.rename(f, to_xml)
