# Insignificant

My friend told me he has a secret message hidden inside the song, but all I hear people singing about infant sharks? He did mention to look into the song bit-by-bit.

### Hints

There is something very significant in the least significant bits.

## Deployment

Run `./generate/build.py`, the output wav file will be placed in the `distrib` directory.
- insignificant.wav
    - SHA1: `3192f83ccd9fbfcc605ce2cd8c172c43b6fd37de`
    - RIFF (little-endian) data, WAVE audio

## Solution

The Least Significant Bit (LSB) is a classical method of audio steganography. There is a [sample solution](solution/solution.py) in the `solution` directory that extracts the LSB of each byte and converts the bits into a readable string, which is the flag.

### Flag
`CYS{570p_5h4rk_f1nn1n6}`
