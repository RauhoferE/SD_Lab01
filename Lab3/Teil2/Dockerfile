FROM debian:jessie

RUN apt-get update
RUN apt-get install apache2 wget -y
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
ADD 000-default.conf /etc/apache2/sites-enabled/ 


RUN apt-get update
RUN apt-get install php5 libapache2-mod-php5 php5-mcrypt php5-mysql php5-curl php5-gd php5-mcrypt php5-xmlrpc -y
RUN a2enmod rewrite
# VOLUME var/www/html
ADD wordpress /var/www/html
RUN rm /var/www/html/index.html

EXPOSE 80
EXPOSE 443

CMD /usr/sbin/apache2ctl -D FOREGROUND