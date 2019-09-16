# Treasure Chest

Ahoy! Can you help me find the missing jewel?

### Hints 

1. You need a steganography tool to wreck the chest and obtain the hidden jewel.

## Deployment

Distribute the file in the distrib folder via a static file server.

## Solution

1. Open the image and scan the barcode at the bottom-left hand corner.
2. Convert the given hexadecimal characters `6d 79 73 74 65 72 79 5f 6b 65 79` into a valid ASCII text `mystery_key`. 
3. Use `steghide extract -sf treasure_chest.jpg` and key in the secret passphrase as `mystery_key`.
4. A file titled ‘treasure_money.txt’ will be generated. 
5. Open up the file and the flag will be hidden amongst a bunch of other junk strings as `CYS{EMER4LD}`. 
