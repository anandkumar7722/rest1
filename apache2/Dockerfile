FROM ubuntu:latest
ARG DEBIAN_FRONTEND=noninteractive
RUN apt update
RUN apt upgrade -y
RUN apt install -y apache2
RUN apt install -y php libapache2-mod-php php-mysql
RUN apt install -y nano git
RUN rm /var/www/html/index.html
COPY ./data/ /var/www/html/
#VOLUME ["/var/www/html"]
CMD /usr/sbin/apache2ctl -D FOREGROUND
