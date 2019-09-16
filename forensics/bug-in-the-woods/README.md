# Bug in the Woods

Someone went missing while out in the woods. Do you know who is it?

## Deployment

Distribute the file in the distrib folder via a static file server.

## Solution

1. By performing `hexdump -c bug.xtr`, one will draw clues that the file begins with an `IHDR` and ends with an `IEND` chunk. This could mean the file was originally a PNG file and was corrupted.

   > ```
   > 89 58 54 52 0d 0a 1a 0a 00 00 00 0d 49 48 44 52		.XTR........IHDR
   > ...
   > 71 78 39 cf 00 00 00 00 49 45 4e 44 ae 42 60 82		qx9.....IEND.B`.
   > ```

2. To change the file header from XTR to PNG, open the file in WinHex and edit the first four bytes from `89 58 54 52` to `89 50 4e 47`. 
3. An image will appear and the flag is at the bottom-left, `CYS{d41sy_15_cut3}`.


