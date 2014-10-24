<?php

define('APP_PUBLIC_PATH', realpath(dirname(__FILE__)));
define('APP_MASTER_PATH', realpath(APP_PUBLIC_PATH . '/../'));
define('APP_VENDOR_PATH', realpath(APP_MASTER_PATH . '/vendor'));

require APP_VENDOR_PATH . '/autoload.php';


$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();