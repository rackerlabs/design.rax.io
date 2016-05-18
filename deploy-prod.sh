#!/bin/bash
cd `dirname $0`

# Extract the package
tar -xzf package.tgz
rm package.tgz

# Swap it all around, keeping the previous version aside in case something goes wrong
rm -rf red_old
mv /var/www/html/wp-content/themes/red /root/red_old
mv red /var/www/html/wp-content/themes/red
cp wp-config-prod.php /var/www/html/