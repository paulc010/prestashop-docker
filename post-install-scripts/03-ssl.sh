#!/bin/sh

cp /tmp/script-resources/set_ssl.php /var/www/html/set_sll.php
chown www-data:www-data /var/www/html/set_ssl.php
chmod 664 /var/www/html/set_ssl.php
runuser -g www-data -u www-data -- php -d memory_limit=-1 /var/www/html/set_ssl.php --ssl $PS_ENABLE_SSL --everywhere $PS_SSL_EVERYWHERE
rm /var/www/html/set_ssl.php
