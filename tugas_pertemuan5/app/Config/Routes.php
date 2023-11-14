<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/latihan/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');
$routes->get('web', 'Web::home');
$routes->get('about', 'Web::about');


$routes->get('form', 'Matakuliah::form');
$routes->post('form/cetak/data', 'Matakuliah::submit');