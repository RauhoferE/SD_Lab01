FROM debian:jessie

RUN apt-get update \
 && DEBIAN_FRONTEND=noninteractive apt-get install -y mysql-server 

#COPY entrypoint.sh /sbin/entrypoint.sh

#RUN chmod 755 /sbin/entrypoint.sh

VOLUME /var/lib/mysql/ 

EXPOSE 3306/tcp

#ENTRYPOINT ["/sbin/entrypoint.sh"]

CMD ["/etc/init.d/mysql start"]