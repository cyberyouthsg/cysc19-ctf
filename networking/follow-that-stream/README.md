# Follow That Stream

------

I downloaded a text file containing the flag and all you have is this packet capture. Good luck finding the flag now!

## Deployment

------

All that is needed is to allow the participants to download the packet capture file `stream.pcapng`.

## Solution

------

1. Open the packet capture file in Wireshark.
2. Right-click any packet and follow the TCP/HTTP stream.
3. Scroll all the way to the bottom of the stream and the flag is found.
4. The flag is `CYS{s3cret_t3xt_f1le}`.