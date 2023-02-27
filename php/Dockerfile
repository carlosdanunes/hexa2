
FROM php:8.1-apache

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && install-php-extensions gd xdebug

# Update and Download Packages Debian
RUN apt-get update --yes

# Install Dependencies
RUN apt-get install --yes \
 autoconf \
 vim \
 nano \
 bzip2 \
 curl \
 ca-certificates \
 gettext \
 git \
 g++ \
 freetds-bin \
 freetds-dev \
 freetds-common \
 make \
 libbz2-dev \
 libcurl4-openssl-dev \
 libicu-dev \
 libzip-dev \
 libfreetype6-dev \
 librabbitmq-dev \
 libgd-dev \
 libjpeg62-turbo-dev \
 libpq-dev\
 libpng-dev \
 libssl-dev\
 libtidy-dev \
 libxslt-dev \
 libxml2-dev \
 openssl \
 pkg-config \
 subversion \
 tar \
 unzip \
 zlib1g-dev \
 zip \
 libonig-dev

RUN docker-php-ext-configure gd --with-freetype=/usr/include/

# Install Extensions
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install bz2
RUN docker-php-ext-install calendar
RUN docker-php-ext-install exif
RUN docker-php-ext-install gd
RUN docker-php-ext-install gettext
RUN docker-php-ext-install intl
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install soap
RUN docker-php-ext-install tidy
RUN docker-php-ext-install xsl
RUN docker-php-ext-install zip

RUN docker-php-ext-configure hash --with-mhash
RUN docker-php-ext-configure intl
RUN docker-php-ext-configure zip

# Install Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt install systemctl -y

RUN chmod 777 -R /var/www/html/

RUN echo "date.timezone=America/Sao_Paulo" > $PHP_INI_DIR/conf.d/date_timezone.ini
#COPY www.conf /usr/local/etc/php-fpm.d/www.conf
RUN rm /etc/apache2/apache2.conf
RUN rm /etc/apache2/sites-enabled/000-default.conf
COPY apache2.conf /etc/apache2/apache2.conf
RUN a2enmod rewrite
RUN a2enmod vhost_alias
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
RUN find /var/www/html -type d -exec chmod 755 {} \;
RUN service apache2 restart
#RUN a2ensite 000-default.conf
#RUN a2dissite limbotecnologia.com.br.conf
#RUN systemctl reload apache2
RUN systemctl reload apache2


# Clean
RUN apt-get clean -y
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

EXPOSE 80
