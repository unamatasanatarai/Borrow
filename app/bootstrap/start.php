<?php
ob_start();
include ROOT . 'app/bootstrap/bootstrap.php';

$router = new Borrow\Dispatcher();
$router->dispatch();
ob_end_flush();
