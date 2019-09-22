#!/usr/bin/env python3
import sys
from math import gcd

if len(sys.argv) != 2:
    print('Usage: {} <outputtxtfile>'.format(sys.argv[0]))
    sys.exit(1)

flag = "CYS{2_plu5_2_15_4_m1nu5_0n3_7h475_3_qu1ck_m47h5}"
e = 65537
p = 3725388540036591041643678991347701532937995068972047889459827083352416094739748803290082375874981227998371945676111
q = 6769093863386297883488638026341328618874310635474126545969024032791150452455022144768609227282398126000693285501811
n = p*q

# Check if e is co-prime
if gcd((p-1),e) != 1 or gcd((q-1),e) != 1:
    print('Error, e is not a coprime')
    exit()

phi = (p-1)*(q-1)

# Converting flag to bytes, then to an integer
m = int.from_bytes(bytearray(flag,'ascii'),byteorder='big',signed=False)
# Encrypted message
c = pow(m,e,n)

with open(sys.argv[1],'w') as fp:
    print(f'e = {e}\nn = {n}\nc = {c}',file=fp)