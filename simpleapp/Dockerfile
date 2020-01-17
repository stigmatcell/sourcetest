FROM ubuntu
ENV DEBIAN_FRONTEND=noninteractive 
RUN apt-get update
RUN apt install apache2 php php-mysql -y
COPY 000-default.conf /etc/apache2/sites-enabled/
COPY app /var/www/html/
CMD apachectl -D FOREGROUND
