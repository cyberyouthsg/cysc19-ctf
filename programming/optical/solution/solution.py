#!/usr/bin/env python3
from PIL import Image
import pytesseract
import codecs

im = Image.open('optical.png')
text = pytesseract.image_to_string(im)
hex_list = text.split("\n")
for hex_str in hex_list:
    # catch strings that may have been translated wrongly by OCR
    try:
        rot13_str = codecs.decode(hex_str,'hex')
        plaintext = codecs.decode(rot13_str.decode(),'rot_13')
        if "CYS" in plaintext:
            print("The flag is: {0}".format(plaintext))
            break
    except ValueError:
        print("Skipped: {0}".format(hex_str))
        continue