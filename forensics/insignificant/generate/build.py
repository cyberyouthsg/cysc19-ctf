#!/usr/bin/env python3

import wave

song = wave.open("generate/song_original.wav", mode='rb')
# Read frames and convert to byte array
frame_bytes = bytearray(list(song.readframes(song.getnframes())))

string = "CYS{570p_5h4rk_f1nn1n6}"
# Append dummy data to fill out rest of the bytes. Receiver shall detect and remove these characters.
string = string + int((len(frame_bytes)-(len(string)*8*8))/8) *'#'
bits = list(map(int, ''.join([bin(ord(i)).lstrip('0b').rjust(8,'0') for i in string])))

# Replace LSB of each byte of the audio data by one bit from the text bit array
for i, bit in enumerate(bits):
    frame_bytes[i] = (frame_bytes[i] & 254) | bit
# Get the modified bytes
frame_modified = bytes(frame_bytes)

# Write bytes to a new wave audio file
with wave.open('./distrib/insignificant.wav', 'wb') as fd:
    fd.setparams(song.getparams())
    fd.writeframes(frame_modified)

song.close()