from nginx:latest
COPY app/ /var/www/html/
#copy nginx.conf /etc/nginx/
copy default.conf /etc/nginx/conf.d/default.conf
#run chown -R www-data:www-data /usr/share/nginx/html
run chown -R www-data:www-data /var/www/html
STOPSIGNAL SIGTERM
CMD ["nginx", "-g", "daemon off;"] 
