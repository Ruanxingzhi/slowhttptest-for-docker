docker stop slowhttptest
docker rm slowhttptest
docker build -t slowtest .
docker run -dit --name slowhttptest slowtest 
