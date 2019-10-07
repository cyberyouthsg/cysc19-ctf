# Basic

It's all about the basics in everything that you learn!

### Hints

1. Multiple base encodings are involved.

## Deployment

Upload files in `distrib` folder to static file server.

- basics.txt
    - SHA1: `b275404a6ac446ada3d159b060c444a0138f6294`

## Solution

The flag is encoded `Base10 > Base32 > Base64`, to get the flag just inverse the operations.

[CyberChef Recipe](https://gchq.github.io/CyberChef/)

```
From_Base64('A-Za-z0-9+/=',true)
From_Base32('A-Z2-7=',true)
From_Decimal('Space',false)
```

### Flag
`CYS{w0w_50_b451c_v_fund4m3n74l}`