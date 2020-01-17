from ubuntu
ENV DEBIAN_FRONTEND=noninteractive 
RUN apt-get update
RUN apt install nginx php php-mysqli php-mysql php-gd -y
copy default-nginx /etc/nginx/sites-enabled/default
CMD ["nginx", "-g", "daemon off;"]
