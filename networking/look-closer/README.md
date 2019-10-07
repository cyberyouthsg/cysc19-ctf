# Look Closer

You are gonna need to have a good eye for this.

## Deployment

Provide download for given packet capture to participants

- suspicious-traffic.pcapng
    - SHA1: `2decbc42daa0fa72a41087107ea7339f597197da`
    - Wireshark Packet Capture

## Solution

Parse the packet capture using python and scapy.

Filter all DNS traffic and extract the additional payloads.

Join all payloads to form base64 string.

Decode string to get flag.

### Flag

`CYS{y0u_h4V3_a_g00D_eY3}` 
