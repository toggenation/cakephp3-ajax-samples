# CakePHP 3 AJAX Samples

* Normal database backed form with AJAX JQuery code in js/add_edit.js
   	* Inspired by: http://jamnite.blogspot.com.au/2009/05/cakephp-form-validation-with-ajax-using.html

* Modelless Form with AJAX JQuery code in js/global.js
	* Inspired by: http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/ 

## To get the samples working

Clone the repository to your local drive

Change directory into the repository and:

Get composer

	curl -s https://getcomposer.org/installer | php

Because composer.json contains all the needed packages run composer to complete the install of the vendor/cakephp and other files

	php composer.phar install

Create the posts database 

	mysql -u<username> -p < config/schema/posts.sql

Modify config/app.php to connect to the database

Run the cakephp internal server

	bin/cake server

connect with browser to 

http://localhost:8765/posts <== Connects to the AJAX Form Validation example

http://localhost:8765/ <== connects to the timezone AJAX/Modelless Form Example
