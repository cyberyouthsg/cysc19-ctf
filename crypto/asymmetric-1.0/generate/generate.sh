#!/bin/sh
openssl genrsa -out private-key.pem 2048
openssl rsa -in private-key.pem -out public-key.pem -pubout
openssl pkeyutl -encrypt -in flag.txt -pubin -inkey public-key.pem -out encrypted.rsa