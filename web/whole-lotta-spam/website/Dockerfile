FROM php:7.0-apache
ENV PORT 8080
ENTRYPOINT []
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground

COPY index.php construct.gif plaiboicarti.jpg /var/www/html/
