<?php
date_default_timezone_set('Europe/Warsaw');
/**
 * Environment
 */
define('CLI', php_sapi_name() == 'cli');

/**
 * "Autoload"
 */

include ROOT . 'vendor/autoload.php';

/**
 * Config
 */
include ROOT . 'app/config/config.php';
