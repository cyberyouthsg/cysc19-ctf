# ARP Spoofed

------

As I was surfing the internet and using my computer normally, I suddenly found that I could not load any websites. Luckily, I have a packet capture of the traffic on my network when this happened. From the packets captured, I can tell that I was the target of ARP poisoning. Can you help me identify the MAC address of the attacker's computer?

The flag is in the form of `CYS{ff:ff:ff:ff:ff:ff}` where ff:ff:ff:ff:ff:ff is the MAC address of the attacker's PC.

Hint: My IP address is 10.0.2.15 and the default gateway is 10.0.2.1.

## Deployment

------

All that is needed is to allow the participants to download the packet capture file `arpspoof.pcapng`.

## Solution

------

1. Open the packet capture file in Wireshark.
2. Filter the packets to only view ARP packets.
3. Viewing the ARP packets, you can see a ARP request broadcast by the computer at IP address 10.0.2.7 with MAC address 08:00:27:65:8c:25 requesting the MAC address of the victim.
4. After the victim responds, we see multiple ARP reply packets from the MAC address of the computer at IP 10.0.2.7 (08:00:27:65:8c:25), but no ARP requests are sent from the victim to 10.0.2.7.
5. On closer inspection, we find that although the MAC address is of the computer with IP address 10.0.2.7, the IP address the ARP reply claims to be from, as seen in the 'Sender IP address' field, is 10.0.2.1, which is the IP of the default gateway.
6. We can conclude that the attacker is at IP address 10.0.2.7 and is repeatedly sending ARP replies to the victim to masquerade as the default gateway, and the attacker's MAC address is 08:00:27:65:8c:25.
7. The flag is `CYS{08:00:27:65:8c:25}`.