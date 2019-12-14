docker build -t prince_haus:0.1.0 .
docker run --rm --name PrinceHaus -p 0.0.0.0:13006:53/udp --init -t prince_haus:0.1.0 & 
sleep 2
echo "Done?"
echo "Container should be up by now, exiting"
docker ps -f name=PrinceHaus