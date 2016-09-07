FROM php:5.6-apache

ADD src/ /var/www/html/
RUN apt-get -y update
RUN apt-get -y install slowhttptest


