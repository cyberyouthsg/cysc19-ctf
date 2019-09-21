# Asymmetric-1.0

RSA is one of the first public-key cryptosystems and is widely used for secure data transmission. Help us decrypt the encrypted message.

### Hints

1. OpenSSL & RSA go hand-in-hand 

## Deployment

Run `./generate.sh` in `distrib` directory.

- encrypted.rsa
    - SHA1: 9c93b3dbe27d852919552b6de0b3130c22370c3d
    - Encrypted file
- private-key.pem
    - SHA1: 3a553138f605733c2c793c46d1462ff310e5290b
    - RSA private key

## Solution

RSA is an asymmetric cryptographic algorithm, meaning that two different keys are involved in the encryption and decryption process respectively (public key for encryption/private key for decryption). We can decrypt the encrypted file using the private key given. 

`openssl pkeyutl -decrypt -in encrypted.rsa -inkey private-key.pem`

### Flag
`CYS{publ1c_k3y_cryp706r4phy}`