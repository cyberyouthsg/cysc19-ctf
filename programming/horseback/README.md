# Horseback

Ever heard of socket programming? It's very simple, all you need to do is connect and send 32 bytes of the carriage return to the server.

### Hints
1. Look at the ASCII table for carriage return.

## Deployment

Run `sudo ./build.sh`

## Solution

1. Craft message as such: `msg = '\x0D'*32`.
2. We can make use of python encode method and socket programming to send the message to the server and get the flag.

[Sample Solution](./solution/solve.py)

### Flag
`CYS{cl13n7_53rv3r_c0mmun1c4710n}`
