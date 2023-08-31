FROM php:7.2-apache
WORKDIR /var/www/html
EXPOSE 80

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

CMD ["apache2-foreground"]