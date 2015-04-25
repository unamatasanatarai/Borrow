<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!version_compare(PHP_VERSION, '5.3.7', '>=')) {
    throw new Exception('PHP v 5.3.7+ required', 1);
}

define('ROOT', realpath(dirname(__FILE__) . '/../') . '/');
define('APP', ROOT . 'app/');

include APP . 'bootstrap/start.php';
