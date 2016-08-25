docker stop slowhttptest
docker rm slowhttptest
docker build -t slowtest .
docker run -it --name slowhttptest slowtest 
