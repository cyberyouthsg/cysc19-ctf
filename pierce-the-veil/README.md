# Pierce the Veil 

Your task now is to investigate a startup that is currently operating in stealth mode and find out what exactly they're doing. You are aware that they own the domain verystealthstartup.xyz and you've been told that their single tech person has been bragging about saving money by using free Let's Encrypt TLS certificates to secure their intranet webapps. Perhaps you could use this information to find some more details about their internal network? 

### Hints
1. This would be so much easier if Let's Encrypt logged every certificate they issued somewhere, wouldn't it?
2. If you see gibberish, try throwing a decoder function at it.
3. 64 isn't the only number.

## Deployment

None required. 

## Solution

Let's Encrypt [submits every certificate it issues to Certificate Transperency logs](https://letsencrypt.org/docs/ct-logs/). These logs are public and can be searched using various websites. To solve this challenge, go to https://crt.sh and query for '%.verystealthstartup.xyz'. There will be two results, 'bloodtestresults.verystealthstartup.xyz' and 'inmvg63en5xhix3hmv2f63lvojvwkzd5.verystealthstartup.xyz'. 
The second subdomain is the important one. Change all the letters to uppercase and use a base32 decoder to reveal the flag, `CYS{dont_get_murked}`
