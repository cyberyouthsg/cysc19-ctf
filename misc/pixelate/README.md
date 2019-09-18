# Pixelate

My friend wanted to share a funny meme picture to me, but all I received was this text file? He did mention that the dimensions of the image was 349x94px.

### Hints
1. My friend mention that the file actually contained the RGBA color values of the image.
2. Wonder why Python & Pillow made such a great combo. Neither have I.

## Deployment

1. `pip install Pillow`
2. Run `generate.py` in `generate` directory.

- pixelate.zip
    - SHA1: `6b3c5d1c16dc3b8c6e14e8b9f2e871ac2fa2e160`
    - ZIP containing `pixelate.txt`

## Solution

The text file contains the RGBA values of an image. In total there are 33440 lines in the text file:

```
$ wc -l pixelate.txt 
32806 pixelate.txt
```

The possible dimensions of the image are the divisors of 32806: 1,2,47,94,349,698,16403,32806. The most likely dimensions are: 349x94px or 94x349px. We can use some string parsing and the Python Imaging Library (PIL), an image can be drawn pixel by pixel from the given RGB values.

[Sample Solution](./solution/solution.py)

### Flag
`CYS{533_7h3_r41nb0w}`