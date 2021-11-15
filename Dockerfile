FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y &&\
	apt-get install -y nginx default-mysql-server openssl procps vim &&\
	apt-get install -y php-fpm php-mysql php-mbstring php-zip php-gd &&\
	apt-get install -y php-curl php-xml php-xmlrpc php-soap php-intl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=MA/ST=Khouribga/L=Essaouira/O=Kennahi/CN=Kennahi"

COPY srcs/default /etc/nginx/sites-available/
COPY srcs/start_services.sh /home
RUN  chmod 777 /home/start_services.sh
COPY srcs/phpmyadmin /var/www/html/phpmyadmin
RUN  mkdir -p /var/www/html/phpmyadmin/tmp
RUN  chmod 777 /var/www/html/phpmyadmin/tmp/
RUN  chown -R www-data:www-data /var/www/html/phpmyadmin
COPY srcs/mysql.sh /home
RUN  sh /home/mysql.sh
COPY srcs/wordpress /var/www/html/wordpress
RUN  chown -R www-data:www-data /var/www/html/wordpress
CMD /home/start_services.sh