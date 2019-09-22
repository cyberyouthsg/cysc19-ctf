#!/bin/sh
docker build -t web-injection .
docker run --restart always -d -p 13000:80 --name web-injection web-injection
docker start web-injection