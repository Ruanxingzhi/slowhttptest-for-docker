FROM ubuntu:15.10

RUN apt-get update -y && apt-get install -y php5
RUN apt-get install -y slowhttptest

EXPOSE 80

WORKDIR /var/www/html/
COPY src/ /var/www/html/
RUN rm -f /etc/apache2/apache2.conf
RUN cp /var/www/html/apache2.conf /etc/apache2/

RUN rm /var/www/html/index.html
RUN chmod -R 777 /var/www/html/


CMD './star'
