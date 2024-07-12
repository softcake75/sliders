<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('login', 'Auth::login');
$routes->post('cek_login', 'Auth::cek_login');

$routes->get('/', 'SliderController::index');
$routes->get('/admin/slider', 'SliderController::admin');
$routes->get('/admin/slider/create', 'SliderController::create');
$routes->post('/admin/slider/store', 'SliderController::store');


$routes->group('admin', ['filter' => 'redirectIfAuthenticated:1'], function ($routes) {

    //user
    $routes->get('user', 'UserController::index');
    $routes->get('logout', 'Auth::logout');
});