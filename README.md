# Docker-environment-for-php-apache-mysql-phpmyadmin-web-app
PHP7.4 Apache  with MySQL and PhpMyAdmin php extension installed.


Just Download docker on your machine and past all file in a folder.
PHP, Apache, MySQL, and phpmyadmin are installd just 
Run this command on that folder path for start or creating containers
# docker-compose up -d

index page and other website code are in src folder can be accebile on localhost:80 and phpmyadmin on localhost:8080

Run this command for stop
# docker-compose down -d

if, want to use my existing website (Record Management System) in the src folder then create database with the name rms and import database file with the name rms.sql that is also in src folder, or if you don't want to use my website, Develop yours.

Follow this link for more understanding docker code: https://truthseekers.io/php-docker-simple-environment/ ( I have used phpmyadmin instead of adminer in docker-compose.yml )
