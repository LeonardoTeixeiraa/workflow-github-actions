FROM php:8.2-apache
LABEL maintainer="@LeonardoTeixeiraa"

RUN apt update; apt upgrade -y; apt install git -y

WORKDIR /var/www/html

COPY src/ ./ 

RUN rm -rf ./src

EXPOSE 80

CMD [ "apache2ctl", "-D", "FOREGROUND" ]