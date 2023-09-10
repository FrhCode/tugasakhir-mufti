FROM ubuntu:focal
# Set working directory
WORKDIR /var/www/

# Install necessary dependencies
ENV DEBIAN_FRONTEND=noninteractive 
RUN apt update && \
		apt install software-properties-common git -y

# Add the PPA repository
RUN add-apt-repository ppa:ondrej/php

# Install dependencies
RUN apt-get install -y \
    curl \
		dos2unix \
		redis-server \
		nginx 

RUN apt-get install -y \ 
		php7.4 \
		php7.4-fpm \
		php7.4-mysql \
		php7.4-curl \
		php7.4-gd \
		php7.4-mbstring \
		php7.4-xml \
		php7.4-zip

RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN pecl install -o -f redis &&  rm -rf /tmp/pear && docker-php-ext-enable redis

# Copy project ke dalam container
COPY . .

RUN chown -R www-data:www-data /var/www

# Install dependency
RUN composer update
RUN npm i

# Expose port 8020
EXPOSE 8020

CMD [ "./start.sh" ]
