<?php
/**
 * @var FastRoute\RouteCollector $r
 */
$r->addRoute('GET', '/', 'Home@index');
$r->addRoute('GET', '/{name}/{id:[0-9]+}', 'Home@show');
