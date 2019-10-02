#!/usr/bin/env python3
import socket

msg = "\x0D"*32

try:
    client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    client_socket.connect(('127.0.0.1',13502))
    client_socket.sendall(msg.encode())
    # Get the server response
    print(client_socket.recv(4096).decode())
    client_socket.close()

except socket.error as e:
    print("Error: {0}".format(e))