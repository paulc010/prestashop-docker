#!/bin/sh

if [ $PS_CANONICAL_REDIRECT -ne 1 ]; then
    cp /tmp/script-resources/set_canonical.php /var/www/html/set_canonical.php
    chown www-data:www-data /var/www/html/set_canonical.php
    chmod 664 /var/www/html/set_canonical.php
    runuser -g www-data -u www-data -- php -d memory_limit=-1 /var/www/html/set_canonical.php --redirect $PS_CANONICAL_REDIRECT
    rm /var/www/html/set_canonical.php
fi
