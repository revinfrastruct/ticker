FROM wordpress:latest
RUN apt-get update && apt-get install -y git

RUN git clone https://github.com/WP-API/WP-API.git \
              /usr/src/wordpress/wp-content/plugins/wp-api

RUN git clone https://github.com/georgestephanis/application-passwords.git \
              /usr/src/wordpress/wp-content/plugins/application-passwords

RUN git clone https://github.com/revinfrastruct/ticker-wordpress.git \
              /usr/src/wordpress/wp-content/plugins/ticker-wordpress
