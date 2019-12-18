# tested on python 3.7.3

import http.client
import base64

def main():
    # TODO: FILL IN 
    secret_url = "/api/v1/secret"
    # TODO: FILL IN
    key = "3jbqg95j-mrkjgin469y3kn569"
    op = input("Enter [D] for Decode, [E] for encode\n" \
        "Decode (D) or Encode (E)? ")
    encoded_secret = b""
    if op == 'D':
        
        h1 = http.client.HTTPConnection("localhost:13008")
        h1.request("GET", secret_url, headers={"Host" : "eW91IGhhdmUgbGl0ZXJhbGx5IGJlZW4gYmFpdGVk.malwa.re.local"})
        r1 = h1.getresponse()
        print(r1.status, r1.reason)
        encoded_secret = r1.read()
        int_list_encoded_secret = [int(i) for i in base64.urlsafe_b64decode(encoded_secret)]
        int_list_key = [ord(a) for a in key]
        secret = bytes([a ^ i for a,i in zip(int_list_key, int_list_encoded_secret)])
        print(secret)


    elif op == 'E':
        secret = input('Secret: ')
        print("Length of secret (make sure length of key matches): "+str(len(secret)))
        key = input('Key: ')
        if len(secret) != len(key):
            print('Secret and Key not the same length')
            exit()
        encoded_secret = bytes([ord(a) ^ ord(b) for a,b in zip(secret,key)])
        
        encoded_secret = base64.urlsafe_b64encode(encoded_secret)

    print("Key: " + key)
    print("Encoded Secret: " + str(encoded_secret))
    print("Secret: " + str(secret))

main()