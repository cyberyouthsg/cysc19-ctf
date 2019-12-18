#!/bin/sh
docker build -t ezpwn .
docker run --restart always --memory 128M -dt -p 13200:5000 --name pwn-ezpwn ezpwn