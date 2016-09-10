docker stop slowhttptest
docker rm slowhttptest
docker build . -t ruanxingzhi/slowhttptest
docker run -dit -p 6431:80 --name slowhttptest ruanxingzhi/slowhttptest 
