#!/usr/bin/env python3
# Generate random hex strings and save to .txt file
import random
import string
import codecs

FLAG = "CYS{c05m1c_cub3}"

with open("./generate.txt","a+") as fp:
    for i in range(75):
        if i == 32:
            flag_enc = codecs.encode(FLAG,'rot_13').encode()
            print(codecs.encode(flag_enc,"hex").decode(),file=fp)
            continue
        rand_list = "".join(random.choices(string.ascii_letters + string.digits, k=13))
        rand_str = rand_list[:3] + "{" + rand_list[3:9] + "_" + rand_list[9:13] + "}"
        print(codecs.encode(rand_str.encode(),'hex').decode(),file=fp)
    
