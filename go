docker stop slowhttptest
docker rm slowhttptest
docker build -t ruanxingzhi/slowhttptest .
docker run -dit -p 80:80 --name slowhttptest slowhttptest 
