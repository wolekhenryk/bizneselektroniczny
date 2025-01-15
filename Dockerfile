FROM prestashop/prestashop:1.7.8-apache

RUN apt-get update && \
    apt-get install -y openssl libmemcached-dev zlib1g-dev && \
    pecl install memcached && \
    docker-php-ext-enable memcached

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/certs/server.key \
    -out /etc/ssl/certs/server.crt \
    -subj "/C=US/ST=State/L=City/O=Company/OU=Department/CN=localhost"

RUN chown www-data:www-data /etc/ssl/certs/server.key /etc/ssl/certs/server.crt

RUN a2enmod ssl && service apache2 restart && a2ensite 000-default.conf && service apache2 restart

COPY /ssl/config/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY /init_mysql.sh /init_mysql.sh

COPY ./db_init /db_init

RUN rm -rf /var/www/html/*

COPY ./prestashop /var/www/html/

RUN rm -rf /var/www/html/var/cache/* && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 777 /var/www/html 

RUN apt-get update && \
    apt-get install -y openssl libmemcached-dev zlib1g-dev && \
    pecl install memcached && \
    docker-php-ext-enable memcached

RUN chmod +x /init_mysql.sh