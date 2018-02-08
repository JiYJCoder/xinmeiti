<?php
if(!is_file('./Cache/config.php'))header("location: ./Install");
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('Ainaphp',true);
define('UPLOAD_PATH','./Uploads/');
define('VERSION','v2.2 Released');
define('UPDATETIME','20121225');
define('APP_NAME', 'Ainaphp');
define('APP_PATH', './Ainaphp/');
define('APP_LANG', false);
define('APP_DEBUG',false);
define('THINK_PATH','./Core/');
require(THINK_PATH.'Core.php');
?>