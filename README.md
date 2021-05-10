# Docker-environment-for-php-apache-mysql-phpmyadmin-web-app
PHP7.4 Apache  with MySQL and PhpMyAdmin php extension installed.


Just Download docker on your machine and past all file in a folder.
PHP, Apache, MySQL, and phpmyadmin are installd just 
Run this command on that folder path for start or creating containers
# docker-compose up -d

index page and other website code are in src folder can be accebile on localhost:80 and phpmyadmin on localhost:8080

Run this command for stop
# docker-compose down -d

if, want to use my existing website (Record Management System) in the src folder then create database with the name rms and import database file from the name rms.sql that is also in src folder, or if you don't want to use my website, Develop yours.

Follow this link for more understanding docker code: https://truthseekers.io/php-docker-simple-environment/ ( I have used phpmyadmin instead of adminer in docker-compose.yml )

Docker Desktop view after running command:

![Screenshot (6)](https://user-images.githubusercontent.com/25547424/117661847-82b80c80-b1bc-11eb-9816-fd1a6bd2ab1e.png)

![Screenshot (8)](https://user-images.githubusercontent.com/25547424/117661659-45ec1580-b1bc-11eb-8602-4e6ea3bfbbfe.png)

Website preview:
![Screenshot (123)](https://user-images.githubusercontent.com/25547424/117662601-5e106480-b1bd-11eb-9f88-51b01b56b05b.png)

![Screenshot (10)](https://user-images.githubusercontent.com/25547424/117679789-35449b00-b1ce-11eb-88b6-c9af71cf8b63.png)

![Screenshot (14)](https://user-images.githubusercontent.com/25547424/117662760-8ac47c00-b1bd-11eb-91cb-bc1a874e8a6e.png)



