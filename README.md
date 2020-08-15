1. Make container with 
docker build -t my-php-app .

2. RUN containers
docker-compose up -d

3. Check if composer is installed.
If not, Install it.
# curl -sS https://getcomposer.org/installer | php
# mv composer.phar composer
# ./composer

4. download dependences:
# ./composer install

5. Added files, which uses blade
 - login.php
 - register.php
 - forgot-password.php
 
=================================================
Last sweets:

1. import scema from mysql/sandbox.mwb
MySQL workbench helps to do it
OR! You can run script mysql/sandbox_scema.sql
AND! You can download schema from mysql/sandbox_scema.png

2. You can fill the database with open in browser script
http://localhost/fill_base.php

3. All user comands with comments are in 
http://localhost/index_eloquent.php
Just uncomment some code and test result
