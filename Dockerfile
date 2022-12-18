FROM ubuntu:20.04
ENV DEBIAN_FRONTEND=noninteractive
ENV XDEBUG_MODE=develop,debug

RUN apt update
RUN apt install software-properties-common -y

RUN add-apt-repository ppa:ondrej/php -y
RUN apt install php8.2 apache2 libapache2-mod-php8.2 -y

RUN apt install -y php-xdebug

COPY back_xdebug_debug /root/
RUN cat /root/back_xdebug_debug >> /etc/php/8.2/cli/php.ini

COPY ./back/ /var/www/html

RUN mkdir -p /var/www/html/.vscode/
# COPY ./back/.vscode/ /var/www/html/.vscode/

ENTRYPOINT apachectl -D FOREGROUND
EXPOSE 80/tcp
