FROM wordpress:latest
RUN apt-get update && apt-get install -y git

RUN git clone https://github.com/WP-API/WP-API.git \
              /usr/src/wordpress/wp-content/plugins/wp-api

RUN git clone https://github.com/georgestephanis/application-passwords.git \
              /usr/src/wordpress/wp-content/plugins/application-passwords

RUN git clone https://github.com/revinfrastruct/ticker-wordpress.git \
              /usr/src/wordpress/wp-content/plugins/ticker-wordpress

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
              chmod a+x wp-cli.phar && \
              mv wp-cli.phar /usr/local/bin/wp

RUN apt-get -y install unzip
RUN curl -O https://downloads.wordpress.org/plugin/disable-embeds.zip && \
              unzip disable-embeds.zip && \
              mv disable-embeds /usr/src/wordpress/wp-content/plugins/disable-embeds && \
              rm disable-embeds.zip

RUN mkdir -p /usr/src/wordpress/wp-content/mu-plugins
COPY stop-oembed.php /usr/src/wordpress/wp-content/mu-plugins/stop-oembed.php

RUN mkdir -p /usr/src/wordpress/wp-content/uploads
RUN chmod -R 777 /usr/src/wordpress/wp-content/uploads


