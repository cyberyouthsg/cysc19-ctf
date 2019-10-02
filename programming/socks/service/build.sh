#!/bin/sh
docker build -t prog-socks .
docker run -d --restart always --memory 128M -p 13502:13502 --name prog-socks prog-socks
docker start prog-socks