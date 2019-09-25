#!/bin/sh

PORT=${PORT:-"8080"}
docker rm -f whole-lotta-spam-1-running
docker run -d -p ${PORT}:${PORT} -e PORT=${PORT} --name whole-lotta-spam-1-running whole-lotta-spam-1
