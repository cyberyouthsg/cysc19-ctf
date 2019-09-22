# String Cheese

Wow C is so fun, so fun that I made a simple program on it.

## Deployment

Compile the C program: `gcc -o string-cheese generate.c`

- string-cheese
    - SHA1: `29f3a349668eaff38cd1e257f1851b9da8f9f916`
    - C compiled binary 

## Solution

View the strings of the binary and searching for the flag from the output:

`strings string-cheese | grep CYS`

### Flag
`CYS{57r1n65_4r3_ju57_ch4r4c73r5_1n_4_57r1n6}`
