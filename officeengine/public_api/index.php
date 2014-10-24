<?php

define('APP_PUBLIC_PATH', realpath(dirname(__FILE__)));
define('APP_MASTER_PATH', realpath(APP_PUBLIC_PATH . '/../'));
define('APP_VENDOR_PATH', realpath(APP_MASTER_PATH . '/vendor'));

require APP_VENDOR_PATH . '/autoload.php';


$app = new \Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    echo 'Hello ' . $app->escape($name);
});

$app->run();