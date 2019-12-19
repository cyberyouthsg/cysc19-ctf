# Frontier

Its now midnight agent. We have found the HTTP server that the botnet is using. Find the secret 
that they are hiding. Decrypt and decode the secret and we can begin to bring down their whole operation.  
  
HTTP server:  
```http://web.cysc19.cyberyouth.sg:13008```  
  
**NO NMAP, DNS OR bruteforce needed**  
  
People who solved Prince Haus:  
   
Theres a easter egg here, no point though.  
   
  
### Hints  
1. Check out this cool text for robots

### Deployment

Deploy service to challenge service server and run ./build.sh.  
Use ./test-server.sh to verify important links are up and viewable.  

## Solution
  
Nginx reveals own configuration under `/config/` (Done intentionally). THis is known by viewing the robots.txt file.  
  
nginx.conf shows a second virtual host / server. This is the one we will be interested in.   
  
Use `curl` or other methods like `Postman` or `Insomnia` to specifially modify the host header in
the HTTP requests. This will cause it to go to the virtual host.  
`eW91IGhhdmUgbGl0ZXJhbGx5IGJlZW4gYmFpdGVk.malwa.re.local`    
  
If you examine the conf, you realise only '`/`' is black holed.  
View `/index.html` directly and you see that it links to `/bots.yaml`, which contains more links.  
  
Additionally, `/robots.txt` plays a part as well.  
  
`/bots.yaml` contains the decryption key used in the XOR later.  
`/api/v1/secret` reveals the encrypted and encoded secret.  
`/scripts/flag.py` is the Python3 script that can retrieve the secret from the server and decode it with a key specified in bots.yaml  
  

Should yield the below:

Flag is `CYS{/!\_++HEAVY_STORM_/!\}`  
Key is  `3jbqg95j-mrkjgin469y3kn569`  
  
Trivial: The subdomain name is the value of the TXT record of clickbait.malwa.re.local