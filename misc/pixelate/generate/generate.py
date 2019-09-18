#!/usr/bin/env python3
import sys
from PIL import Image

if len(sys.argv) != 3:
    print('Usage: {} <imagefile> <outputtxtfile>'.format(sys.argv[0]))
    sys.exit(1)

image = Image.open(sys.argv[1])
data = list(image.getdata())

with open(sys.argv[2],"a") as fp:
    for pixel in data:
        fp.write(",".join(map(str,pixel))+"\n")