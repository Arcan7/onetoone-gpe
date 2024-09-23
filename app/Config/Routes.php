<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'Home::dashboard');

$routes->group('auth', function ($routes) {
    $routes->get('login', 'AuthController::index');
});

$routes->group('data', function ($routes) {
    $routes->get('brute', 'DataController::index');
});