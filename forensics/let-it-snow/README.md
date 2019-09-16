# Let it Snow

Christmas is right around the corner~ Let's get together and celebrate!

## Deployment

Distribute the file in the distrib folder via a static file server.


## Solution

SNOW (Steganography Nature Of Whitespace) is used to hide the flag within the text file. 

By using the SNOW tool, the hidden message can be extracted. Password used for the encryption can be found at the end of the text file.

In Linux, the following command can be used to extract the message.

```
stegsnow -p snowy let_it_snow.txt
```

In Windows, SNOW.exe can be downloaded and the following command can be used to extract the message.

```
SNOW.EXE -p snowy let_it_snow.txt
```

After extracting the hidden message, you will get the flag `CYS{CHR157MA5_5P1R17}`
