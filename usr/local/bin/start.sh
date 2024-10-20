#!/bin/sh

# Create the directory for PHP-FPM socket file
mkdir -p /run/php-fpm

# Start PHP-FPM
php-fpm &

# Start Apache in the foreground
httpd -D FOREGROUND
