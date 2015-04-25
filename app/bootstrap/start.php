<?php
ob_start();
include APP . 'bootstrap/bootstrap.php';

/**
 * Route all the things!
 */

$dispatcher = FastRoute\cachedDispatcher(
    function (FastRoute\RouteCollector $r) {
        require_once APP . 'config/routes.php';
    }, [
        'cacheFile' => STORAGE . 'cache/routes.txt',
        'cacheDisabled' => true
    ]
);


$routeInfo = $dispatcher->dispatch(
    $_SERVER['REQUEST_METHOD'],
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        exit('Not Found');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        http_response_code(405);
        exit('Method Not Allowed');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        if (strpos($handler, '@') !== false) {
            $handler .= '@index';
        }
        list($class, $method) = explode('@', $handler);
        $obj = new $class($method, $vars);
        break;
}

ob_end_flush();
