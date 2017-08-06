<?php

defined('DS')? null : define('DS', DIRECTORY_SEPARATOR);


//Define path for images if it doesn't exist
defined('SITE_ROOT')? null : define('SITE_ROOT', DS. 'PHP fundamentals and Object-Oriented PHP' .DS. 'Gallery-System-OOP'.DS);

//Since we are gonna use a lot includes folder create a constant
defined('INCLUDES_PATH')? null : define('INCLUDES_PATH', SITE_ROOT.'admin'.DS.'includes');


//The init php will have all the includes
require_once('functions.php');
require_once('new_config.php');
require_once('database.php');
require_once('db_object.php');
require_once('user.php');
require_once('photo.php');
require_once ('session.php');





?>