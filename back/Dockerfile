FROM ubuntu:20.04
ENV DEBIAN_FRONTEND=noninteractive
ENV XDEBUG_MODE=develop,debug

RUN apt update
RUN apt install software-properties-common -y

RUN add-apt-repository ppa:ondrej/php -y
RUN apt install php8.2 apache2 libapache2-mod-php8.2 php8.2-mysql -y

RUN apt install -y php-xdebug

COPY ./conf/apache2.conf /root/
RUN mv /root/apache2.conf /etc/apache2/apache2.conf

COPY ./conf/back_xdebug_debug /root/
RUN cat /root/back_xdebug_debug >> /etc/php/8.2/cli/php.ini

RUN mkdir -p /var/www/html/.vscode/
COPY ./conf/.vscode/launch.json /var/www/html/.vscode/

## For pretty url
RUN a2enmod rewrite

# no need but to supress warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


ENTRYPOINT apachectl -D FOREGROUND
EXPOSE 80/tcp
