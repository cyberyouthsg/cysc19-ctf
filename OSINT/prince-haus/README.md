# Prince Haus

Good morning agent, we have detected a hacking group that is in control of a large botnet.  
They are using a ***DNS*** server as a C & C server to distribute  
information. Can you tell us more?  
  
DNS server:  
```prog.cycs19.cyberyouth.sg:13006\UDP```  

Domain name to investigate:  
```malwa.re.local```    
  
### Hints  
1. Strings need to be concatenate together and they are in base64

### Deployment

Deploy DNS server to a container  
Run build.sh in service after moving the folder to the Docker host   
DNS server will be published to UDP port 13006  

### DNS Records  
     
| TYPE | Name                      | Value |
| ---- | ------------------------- | ----- |
| TXT  | clickbait.malwa.re.local. | eW91IGhhdmUgbGl0ZXJhbGx5IGJlZW4gYmFpdGVk |
| TXT  | malwa.re.local.           | TXT and URI |
| TXT  | uneedthis.malwa.re.local. | TyBybHk/ |
| URI  | uneedthis.malwa.re.local. | https://gchq.github.io/CyberChef/#recipe=From_Base64('A-Za-z0-9%2B/%3D',true)AES_Decrypt(%7B'option':'Base64','string':''%7D,%7B'option':'Base64','string':'initialisationvector1'%7D,'CBC','Raw','Raw',%7B'option':'Hex','string':''%7D)From_Base64('A-Za-z0-9%2B/%3D',true) |
| URI  | empty.malwa.re.local.     | https://pastebin.com/JwF8ZYd3 |
| TXT  | somthing.malwa.re.local   | aHR0cHM6Ly95b3V0dS5iZS9kUXc0dzlXZ1hjUQ== |
| TXT  | flag.malwa.re.local       | Q1lTKEkgd2lzaCBpdCB3YXMgdGhhdCBlYXN5KQ== |
| TXT  | empty.malwa.re.local.     | RG9uJ3QgZmVlbCB0b28gX2VtcHR5XyBoYW5kZWQKTWFrZXMgdGhpbmdzIHJlZ3VsYXIgYWdhaW4gZnJvbSB0aGUgbm9uc2Vuc2UgYW5kIHJlYnVpbGQgZnJvbSB0aGUgc3RhcnQuIApUaGVyZSBpcyBhbHdheXMgYW4gb3JkZXJseSBleHByZXNzaW9uIHRvIHRoaW5ncy4uLi4KCk1heWJlIGp1c3QgbWF5YmUgdGhhdCAuLi4uIGlzIGtleSB0byBpdCA= |
| TXT  | nonsense.malwa.re.local  | MmE2OTFlODBiODg2MmE2MmYzMzQ0OGY1OWExmmE2dGhpOTFlZDNhMWJjNzI2MjU0ZWU2NDE3ZWJmOWI3NzMyNTEyZWQ0YzNiYjcwN2VlYmM0MjQ3MzhhNmVlMDVhZGFlZTI4ODg0MjlkMzk4NWQ4ODJlMjhmMmE1NDY1NmmE2c2lzOTFljg0YjA2ODM3MDNkOTZjN2E3MDAyZjg5ZmRjYzMxZjMwYTg3ZDRhYWJkZDQzODQ1MmI4NGI3MDM1YjliMmUwMjg4MmQxYmEzYmY3ZTI0OWFhY2IwZWNjMGmmE2aW1wOTFlQ3MWExNzZiOTUzMWI2ZmUxOTM2ZDVkNWRmM2M0OGMzNWRiOWM0MzA2OGFiNmQ2ZTRjOTU2YTExZmNkZTVhOTBlOTI0MWY1ZmYzMjQzYTdiZWU1N2IwZmNiNTM5ZDcyOTViOGEzYzUzM2M0YjMxNWFhNjljYmE3ZTA2M2IxYTgxZjRjN2JlN2E4NmNmZDAwMTliZDI0ZDcyMmEzYTU1Y2ZhZjMwYmQxZTdiMjMmmE2b3J0OTFlxYTg4YmU4OTQxYTFlODdjMzU1YjMyZGI2ZTBmNGQ2M2FhZGFjYTJjM2E2NDI4MzE2OTY3ZmE1ZTg4ODIzNTA1YWRmNzgyNGZhZTJiNjZiYzFiZjc2MzcxYzgwYmRjMGViYzI1NzmmE2YW50OTFlFhNjdiNTcxODU0OGQwM2M0NmZhMTU0NjExMWZhNjU4MWI1NGJjODNhMTk0YjllMTFmNjI2YmExZDNjMzg1MTFmmE2b2s/OTFllYTA1N2MyNzkxYTE5MDI5N2M5ZmU1MzQ5YWI4NjNiNmU4ODdkYzIxMTUxNTg4NWRiMTc2Njk5ZGU2Nzc2NjRiM2ZhOTgwNDA4YmU3MTU0OTBlNTJhZTVhMWNiMmUxOTUwNWQ4OTdjYmRiNWI3NWRmYTRhMGNkYWZjZjc4ZDdhMzQ0NGE5NDZlODE2MGMwZTNiMGExNmI4MmRmmE2YXdkOTFliNzA2MjFkMWNhMmY0Mjk0ZjQxNTY4OWZjZjU0MWQyMzU4MDQyNzNhZjkzMTNkYjI0MThiYmM0Y2M2MGE0ZjljYjQ2ZDU5OWQ5MTA5MTYwNDE4YmQyOWJmMTA0ZjZhMjlhMTJjZTkwMTQ3ZTE2ODAyYmM5MjRkNjAyNjFhZTA3ZmVjZDEyNjEyNDdjY2I1NDkxNTA5YTYxMmRmNTZhOGM4M2Y0YWZhMWJkNjU4M2M0OTI5MjZhZWFmMDQ4MGUymmE2Zw==OTFlMGViOWQ4ODY2ZThlMTI= |
| TXT | malwa.re.local. | clickbait empty flag nonsense something uneedthis |

## Solution
Use  
`dig @prog.cycs19.cybeyouth.sg -p 13006 -t TXT malwa.re.local`  
It will list all the relevant urls you need to test  


```URL uneedthis``` brings you to the **algorithm to decrypt it**  
```URL empty``` gives you the cipher text  
  
The key is encapsulated in `mmE2___OTFl` regex: mmE2....OTFl and placed in `TXT nonsense.malwa.re.local.`  
```TXT empty``` gives instruction on how to get the key:  
```
Don't feel too _empty_ handed
Makes things regular again from the nonsense and rebuild from the start. 
There is always an orderly expression to things....

Maybe just maybe that .... is key to it 
```
`TXT Nonsense` is not valid base64, the following part shows the important section.  
Padding ('==') is in the middle of the data where it normally will be at the end.  
Repeated header and trailer is in the other parts of the data  
  4MGUy**mmE2**Zw==**OTFl**MGViOWQ4ODY2ZThlMTI=  

Rebuild the key from the individual parts, assemble it from start to end to get the base64 key.  
BASE64 of key: `dGhpc2lzaW1wb3J0YW50b2s/YXdkZw==`  
SPLIT UP:  
- dGhp
- c2lz
- aW1w
- b3J0
- YW50
- b2s/
- YXdk
- Zw==  
  
Key in plaintext is *thisisimportantok?awdg*. Feed the key in the algorithm above, which is learnt from ```URL uneedthis```  
  
IV is: ```initialisationvector1``` (all settings other than key should be in cyberchef link)

Flag is `CYS{/!\_++SECURITY_THROUGH_OBSCURITY++_/!\}`
