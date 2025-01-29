<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');

$routes->get('/auth/login','Login::index');
$routes->post('/auth/postlogin','Login::login');
$routes->get('/auth/logout','Login::logout');

$routes->post('/dashboard','Dashboard::index');