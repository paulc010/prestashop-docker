#!/bin/sh

if [ $E_SMTP_SERVER = 1 ]; then
    cp /tmp/script-resources/update_smtp.php /var/www/html/update_smtp.php
    chown www-data:www-data /var/www/html/update_smtp.php
    chmod 664 /var/www/html/update_smtp.php
    runuser -g www-data -u www-data -- php -d memory_limit=-1 /var/www/html/update_smtp.php
    rm /var/www/html/update_smtp.php
fi
