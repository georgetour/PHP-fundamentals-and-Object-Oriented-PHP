<?php

defined('DS')? null : define('DS', '/');


//Define path for images if it doesn't exist
defined('SITE_ROOT')? null : define('SITE_ROOT', DS. 'xampp2'.DS. 'htdocs'.DS. 'PHP-fundamentals-and-Object-Oriented-PHP' .DS. 'Gallery-System-OOP');

//Since we are gonna use a lot includes folder create a constant images
defined('INCLUDES_PATH')? null : define('INCLUDES_PATH', SITE_ROOT.'images' .DS);


//The init php will have all the includes
require_once('functions.php');
require_once('new_config.php');
require_once('database.php');
require_once('db_object.php');
require_once('user.php');
require_once('photo.php');
require_once ('session.php');





?>