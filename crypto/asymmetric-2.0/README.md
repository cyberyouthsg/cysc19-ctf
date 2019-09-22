# Asymmetric-2.0

After learning about RSA, I decided to create a proof-of-concept. The problem is that I seemed to have misplaced some of the variables needed for RSA, however I did maange to write the remaining variables in the file below.

### Hints

1. Prime factorisation

## Deployment

Run `./generate.py` in `generate` directory.

- asymmetric-2.0.txt
    - SHA1: `4c606bdc48583b633b1e314556e7038ae984f46d`
    - Text file containing e,n and c

## Solution

1. We are given `n` which we can perform prime factorisation in order to find `p` and `q`. To do that simply head down to [factordb](http://factordb.com/)
2. Afterwards, we can calculate `d` by performing a modular inverse function using the given `e` and `phi`
3. We can decrypt the ciphertext `c` using `n` and `d`.

[Sample Solution](./solution/solution.py)


### Flag
`CYS{2_plu5_2_15_4_m1nu5_0n3_7h475_3_qu1ck_m47h5}`
