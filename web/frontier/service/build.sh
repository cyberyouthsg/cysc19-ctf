sudo docker kill frontier
sudo docker rm frontier
sudo docker build -t frontier .
sudo docker run --name frontier \
  -d \
  -v ${PWD}/default-pages:/usr/share/nginx/html/default \
  -v ${PWD}/malware-home-pages:/usr/share/nginx/html/malwary \
  -p=127.0.0.1:13008:13008 --restart always frontier
docker ps -f name=frontier

