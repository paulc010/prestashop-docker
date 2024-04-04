#!/bin/sh

if [ $PS_CANONICAL_REDIRECT -ne 1 ]; then
    runuser -g www-data -u www-data -- php /tmp/post-install-scripts/php/set_canonical.php
fi
