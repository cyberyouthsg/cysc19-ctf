# Mail

------

I've sent an email. Find the content of the email and the flag is yours.

## Deployment

------

All that is needed is to allow the participants to download the packet capture file `mail.pcapng`.

## Solution

------

1. Open the packet capture file in Wireshark.
2. The flag is within an email, so look for SMTP traffic and follow the TCP stream.
3. The email reads "I have created the flag for the SMTP challenge. The flag is in b64 so it's obfuscated!".
4. The flag is given as "Q1lTe1VuM25jcnlwdDNkX20zc3M0ZzN9" in the email, and it is in base64 encoding.
5. Decode the base64 and the flag is yours.
6. The flag is `CYS{Un3ncrypt3d_m3ss4g3}`.