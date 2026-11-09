FROM php:8.4-apache
RUN a2enmod rewrite \
    && docker-php-ext-install pdo_mysql \
    && printf '<Directory /var/www/html>\n  Options -Indexes +FollowSymLinks\n  AllowOverride All\n  Require all granted\n</Directory>\n' > /etc/apache2/conf-available/cours-php.conf \
    && a2enconf cours-php
