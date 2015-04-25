<?php
date_default_timezone_set('Europe/Warsaw');
/**
 * PATHS
 */
define('STORAGE', ROOT . 'storage/');
define('CLI', php_sapi_name() == 'cli');

/**
 * "Autoload"
 */

include ROOT . 'vendor/autoload.php';

/**
 * Config
 */
include APP . 'config/config.php';
