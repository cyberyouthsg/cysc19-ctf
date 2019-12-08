#!/usr/bin/env python3
import socket
import threading

bind_addr = "0.0.0.0"
bind_port = 13502

server = socket.socket(socket.AF_INET,socket.SOCK_STREAM)
server.bind((bind_addr,bind_port))
server.listen(10)

def client_conn_handler(client_socket):
    banner = "Hi there! Send your message below.\n>"
    client_socket.send(banner.encode())
    while True:
        buf = client_socket.recv(4096).decode()
        if buf == "\x0D"*32:
            msg = "Woohoo! Here is the flag:\nCYS{cl13n7_53rv3r_c0mmun1c4710n}"
            client_socket.send(msg.encode())
            client_socket.close()
        else:
            msg = "Sorry, that's not the message. Try again!\n>"
            client_socket.send(msg.encode())

print("Program started...")
while True:
    client_socket,addr = server.accept()
    print("Accepted connection from {}:{}".format(addr[0], addr[1]))
    client_handler = threading.Thread(target=client_conn_handler,args=(client_socket,))
    client_handler.start()