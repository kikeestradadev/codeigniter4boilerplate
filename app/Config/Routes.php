<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
// $routes->get('/product', 'Products::detailProduct');
$routes->get('/products/(:num)', 'Products::detailProduct/$1');
// $routes->get('/products/([0-9]{2})', 'Products::detailProduct/$1');
$routes->get('/products/(:alpha)/(:num)', 'Products::cat/$1/$2');

// $routes->view('/productList', 'product_list');
$routes->view('/productList/(:num)', 'product_list');