# Optical

Help! My friend Caesar sent me a picture containing some weird characters, he thinks that one of the lines appear to be the flag but it seems to be encoded.

### Hints
1. Image2Text

## Deployment

Upload files in `distrib` folder to static file server.

- optical.png
    - PNG file containing hundred lines of hexadecimals
    - SHA1: `2feb04b2f158371ad8e3433d55464bb42c4eca05`

## Solution

1. The image shows lines of hexadecimal strings, we can use OCR to extract the text from the image. 
2. Afterwards, we can decode the hexadecimal strings to ASCII.
3. The decoded text seems like it has been rotated, performing a ROT-13 on line 32 will result in the flag.

[Sample Solution](solution/solution.py)
### Requirements
1. `sudo apt install tesseract-ocr`
2. `sudo pip3 install pytesseract`
3. `./solution.py`

### Flag
`CYS{c05m1c_cub3}`
