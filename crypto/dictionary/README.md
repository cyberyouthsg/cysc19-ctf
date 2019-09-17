# Dictionary

We intercepted a hash located in `hash.txt`, and we believe that the hash belongs to one of the entries in `lookup.lst`. Help us find the matching pair and you will be rewarded for your efforts.

### Hints
The title of the challenge is linked to a specific attack in password cracking.

## Deployment

Run `./generate/generate.py` to generate `lookup.lst`

- hash.txt
    - SHA1: `4fad5fbe23fd100d4674f26e2a1d50dccf6074ed`
    - Text file

## Solution

1. Identify the hash function used in `hash.txt`, which is Raw SHA-256
2. Perform a dictionary attack using `lookup.lst` as the wordlist: 

    e.g Using hashcat — `hashcat -m 1400 hash.txt passwords.lst`

### Flag

`CYS{p1np01n7_4ccur4cy}`
