#!/usr/bin/env python3
import random
from string import ascii_letters, digits

charlist = ascii_letters + digits + "_"
flag = "CYS{p1np01n7_4ccur4cy}"

with open("./distrib/lookup.lst","a") as fp:
    # Write 100000 lines of strings to file
    for line in range(100000):
        if line == 75212:
            fp.write(flag+"\n")
        rand_str = ""
        # Generate characters according to flag's string length
        for char in range(17):
            rand_str += random.choice(charlist)
        rand_str = "CYS{" + rand_str + "}\n"
        fp.write(rand_str)
