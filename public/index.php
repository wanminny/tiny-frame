<?php




// BASE_PATH
define('BASE_PATH', dirname(__DIR__));

// VIEW_BASE_PATH
define('VIEW_BASE_PATH', BASE_PATH.'/app/views/');
//ECHO VIEW_BASE_PATH;DIE;

require '../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


//\Twig_Autoloader::register();
//
//$loader = new Twig_Loader_Filesystem(VIEW_BASE_PATH);
//$twig = new \Twig_Environment($loader, array(
//    'cache' => BASE_PATH."/storage/cahce",
//));

// View Loader
class_alias('\TinyLara\TinyView\TinyView','View');


//file_get_contents();die;
// var_dump($whoops);
require '../config/routes.php';





