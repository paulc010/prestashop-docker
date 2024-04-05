#!/bin/sh

if [ $E_DEVELOPMENT = 1 ]; then 
  ERROR_REPORTING="E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED"
  ERROR_LOG="syslog"

  # The ; in the next line is because the line is commented by default
  sed -i "s/;error_log = .*/error_log = ${ERROR_LOG}/" /usr/local/etc/php/php.ini
fi
