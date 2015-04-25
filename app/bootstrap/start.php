<?php
ob_start();
include APP . 'bootstrap/bootstrap.php';
Dotenv::load(ROOT);
Log::start(STORAGE . 'logs/');
$router = new Borrow\Dispatcher();
$router->dispatch();
ob_end_flush();
