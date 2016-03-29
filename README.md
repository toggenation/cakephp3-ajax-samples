Run:
    php composer.phar install
This will install the cakephp and other files needed

Create the posts database (make sure you don't currently have a posts database as this script will drop it)

mysql -u<username> -p < config/schema/posts.sql

Modify config/app.php to connect database

Run cakephp internal server

bin/cake server

connect with browser to 

http://localhost:8765/posts <== Connects to the AJAX Form Validation example

http://localhost:8765/ <== connects to the timezone AJAX/Modelless Form Example
