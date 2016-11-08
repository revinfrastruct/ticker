#!/bin/bash

WP="docker exec ticker_wordpress_1 /usr/local/bin/wp --allow-root"

$WP core install --url=http://127.0.0.1:8080 --title=Motkraft --admin_user=admin --admin_password=topsecret --admin_email=admin@example.org
$WP plugin activate wp-api
$WP plugin activate application-passwords
$WP plugin activate ticker-wordpress

