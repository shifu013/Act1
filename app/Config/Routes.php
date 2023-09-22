<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('shifu', 'Home::shifu');
$routes->get('test', 'MainController::test');
$routes->post('save', 'MainController::save');
