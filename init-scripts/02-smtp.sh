#!/bin/sh

if [ $E_SMTP_SERVER = 1 ]; then
    php ./update_smtp.php
fi
