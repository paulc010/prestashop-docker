#!/bin/sh

if [ $E_SMTP_SERVER = 1 ]; then
    runuser -g www-data -u www-data -- php /tmp/init-scripts/update_smtp.php
fi