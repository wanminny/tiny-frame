<?php

require '../vendor/autoload.php';


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


//file_get_contents();die;
// var_dump($whoops);
require '../config/routes.php';


