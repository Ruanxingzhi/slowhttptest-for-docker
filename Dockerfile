FROM php:5.6-apache

ADD src/ /var/www/html/
RUN cp /var/www/html/slowhttptest /usr/bin/

RUN chmod -R 777 /var/www/html/

EXPOSE 80
