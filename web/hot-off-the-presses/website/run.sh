#!/bin/sh

PORT=${PORT:-"8080"}
docker rm -f hot-off-the-presses-1-running
docker run -d -p ${PORT}:${PORT} -e PORT=${PORT} --name hot-off-the-presses-1-running hot-off-the-presses-1
