<?php

define('APP_PUBLIC_PATH', realpath(dirname(__FILE__)));
define('APP_MASTER_PATH', realpath(APP_PUBLIC_PATH . '/../'));
define('APP_VENDOR_PATH', realpath(APP_MASTER_PATH . '/vendor'));
define('APP_VERSION', 'v1');
define('URL_PREFIX', '/' . APP_VERSION);

require APP_VENDOR_PATH . '/autoload.php';

$app = new \Silex\Application();

/**
 * example
 */
$app->get(URL_PREFIX . '/hello/{name}', function ($name) use ($app) {
    
    return 'Hello ' . $app->escape($name);
});

$app->get(URL_PREFIX . '/hahaha/{name}', function ($name) use ($app) {
    
    return 'Hello ' . $app->escape($name);
});


$app->run();