<?php
require __DIR__ . '/vendor/autoload.php';
require_once('./Service.php');

use \DI\Container;

//do something with container and its configuration
$container = new Container();

(new Home\IndexTest($container))->getPHPInfo();