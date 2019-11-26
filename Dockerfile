FROM ubuntu:18.04

MAINTAINER João Paulo SR, jpaulolxm@gmail.com

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update

RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php

RUN apt-get update

RUN apt-get install -yq --no-install-recommends \
    apt-utils \
    curl \
    # Install git
    git \
    # Install apache
    apache2 \
    # Install php 7.3
    mysql-client \
    libapache2-mod-php7.3 \
    php7.3-cli \
    php7.3-json \
    php7.3-curl \
    php7.3-fpm \
    php7.3-gd \
    php7.3-mbstring \
    php7.3-mysql \
    php7.3-soap \
    php7.3-xml \
    php7.3-zip \
    php7.3-intl \
    php7.3-redis \
    # Install tools
    supervisor \
    htop \
    glances \
    openssl \
    nano \
    locales \
    ca-certificates \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

## Set locales
RUN locale-gen en_US.UTF-8 pt_BR pt_BR.UTF-8
#
# Configure PHP for TYPO3
COPY config/php/typo3.ini /etc/php/7.3/mods-available/
RUN phpenmod typo3
# Configure apache for TYPO3
RUN a2enmod rewrite expires
RUN echo "ServerName localhost" | tee /etc/apache2/conf-available/servername.conf
RUN a2enconf servername
# Configure vhost for TYPO3
COPY config/apache2/typo3.conf /etc/apache2/sites-available/
RUN a2dissite 000-default
RUN a2ensite typo3.conf

# Laravel schedule
#RUN echo "* * * * * cd /var/www && php artisan schedule:run >> /dev/null 2>&1" | crontab -

COPY ./config/supervisor/supervidord/supervisord.conf /etc/supervisor/
COPY ./config/supervisor/config-d/* /etc/supervisor/conf.d/

#ADD entrypoint.sh /entrypoint.sh
#RUN chmod +x /entrypoint.sh

EXPOSE 80 443 6001 8888

WORKDIR /var/www/

RUN chown -R www-data:www-data /var/www
#RUN chgrp -R www-data storage bootstrap/cache
#RUN chmod -R ug+rwx storage bootstrap/cache

CMD ["supervisord", "-c", "/etc/supervisor/supervisord.conf"]

#
#HEALTHCHECK --interval=5s --timeout=3s --retries=3 CMD curl -f http://localhost || exit 1
#


#ENTRYPOINT ["/entrypoint.sh"]
