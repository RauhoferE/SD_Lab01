# Lab3
Für dieses Lab waren 2 Aufgaben geplant.

## Teil1
Bei Teil 1 geht es darum eine Wordpress Seite zu deployen, welche ein mysql image verwendet. Das wird gemacht durch den Command docker-compose.

1. Im ersten Schritt habe ich Compose installiert über diesen Link: https://docs.docker.com/compose/install/
2. Dann habe ich mithilfe von diesem Link: https://docs.docker.com/compose/wordpress/, die compose File gebaut.
3. Dann habe ich mit docker-compose up -d den Docker gebuildet.
4. Hier sieht man das sowhol wordpress als auch mysql in einem container laufen.
![Build](screen1.png)

## Teil2
Bei Teil2 geht es darum zwei eigene Images für MYSQL und wordpress zu erstellen.

1. sudo docker pull debian:jessie um das image runterzuladen

2. Danach habe ich eine Dockerfile für den Apache Server erstellt.

3. Dabei bin ich der Installationsanleitung auf https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04 gefolt.

4. Danach habe ich noch eine 000-default.conf und dir.conf file für den Apache Server erstellt.

5. Nach dem Schreiben der Dockerfile habe ich in dem Ordner MYSQL eine Dockerfile und ein entrypoint script für mysql erstellt.

6. Für diesen Schritt habe ich mich an dieser Anleitung orientiert: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

7. Nach diesem Schritt habe ich noch die Apache Dockerfile so angepasst, dass Wordpress installiert wird.

8. Dafür habe ich zuerst die letzte Wordpress Version heruntergeladen und die wp-config.php angepasst.

9. Um die MYSQL Dockerfile zu bauen muss man zuerst in den Ordner MYSQL gehen un dann braucht man den Command: sudo docker build ./

10. Um den Apache Server zu bauen geht man in den Ordner Teil2 und führt dort "sudo docker build ./" aus.

11. Danach habe ich auf Docker Hub zwei neue Repositories für die Images erstellt.

12. Diese dann mit "sudo docker tag <tagnummer> 104609/<reponame>" getaggt.

13. Und mit "sudo docker push 104609/<reponame>" habe ich sie dann gepusht.

14. Danach habe ich die docker-compose.yml file erstellt.

15. Man kann die beiden Images mit "sudo docker-compose up" deployen.