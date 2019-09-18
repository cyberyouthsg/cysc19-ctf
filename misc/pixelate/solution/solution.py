#!/usr/bin/env python3
import sys
from PIL import Image
import numpy

if len(sys.argv) != 3:
    print('Usage: {} <textfile> <outputimage>'.format(sys.argv[0]))
    sys.exit(1)

pixels = open(sys.argv[1]).read().split("\n")
del pixels[-1]
pixel_list = []

for x in pixels:
  array = x.split(",")
  array = tuple([int(w) for w in array])
  pixel_list.append(array)

new_img = Image.new("RGBA", (349,94))
new_img.putdata(pixel_list)
new_img.save(sys.argv[2])
