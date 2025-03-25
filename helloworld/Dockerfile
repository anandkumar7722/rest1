FROM ubuntu:latest
WORKDIR /var/app
RUN apt update -y
RUN apt upgrade -y
RUN apt install htop bc -y
CMD [ "/bin/bc","-i"]
