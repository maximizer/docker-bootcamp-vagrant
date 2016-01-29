FROM ubuntu:15.10

# Install PHP, and Apache
RUN apt-get update && \
    apt-get -yq install \
        curl \
        apache2 \
        libapache2-mod-php5 \
        php5 

RUN apt-get -y install wget

# Copy code
RUN rm -r /var/www/html
COPY index.php /var/www/html/index.php

# Expose port and run apache
EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]
