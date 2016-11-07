# Ticker
[![Anarchism](https://img.shields.io/badge/anarchism-Ⓐ-000000.svg)](https://en.wikipedia.org/wiki/Anarchism)
[![Communism](https://img.shields.io/badge/communism-☭-ff0000.svg)](https://en.wikipedia.org/wiki/Communism)
[![Socialism](https://img.shields.io/badge/socialism-★-ff0000.svg)](https://en.wikipedia.org/wiki/Socialism)
![Ideology passing](https://img.shields.io/badge/ideology-passing-brightgreen.svg)

## Prerequisites
+ `docker`
+ `docker-compose`

## Installation
+ `$ cp logstash/environemnt.env.example logstash/environemnt.env`
+ `$ cp wordpress/environemnt.env.example wordpress/environemnt.env`
+ `$ cp mysql/environemnt.env.example mysql/environemnt.env`

Replace example VARS with real ones, then and complete the Wordpress setup.

+ `$ docker-compose up wordpress mysql`
+ `$ open http://localhost:8080`
+ Enable `wp-api`, `application-password` and `live-ticker` plugins
+ Create a new Application Password (Users › Your profile › Add new Application Password)
  - Copy password to `logstash/environemnt.env` as `WORDPRESS_PASS`
+ `$ docker-compose down`

Launch all services.

+ `$ docker-compose up`
