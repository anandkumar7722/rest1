FROM ubuntu:latest
ARG DEBIAN_FRONTEND=noninteractive
WORKDIR /var/photogram
RUN apt update
RUN apt upgrade -y
RUN apt install -y apache2
RUN apt install -y php libapache2-mod-php php-mysql
RUN apt install -y nano git
RUN rm -rf /var/www/html
COPY ./data/ .
RUN chmod +x /var/photogram/main.sh
VOLUME ["/var/www/html"]
CMD /var/photogram/main.sh
