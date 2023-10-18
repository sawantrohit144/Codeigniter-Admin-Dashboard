<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Admin
$routes->get('login', 'AdminUser::login');
$routes->post('login', 'AdminUser::login');
$routes->get('dashboard', 'Dashboard::dash');

//categories
$routes->get('categories', 'Dashboard::categories');
$routes->get('addcategories', 'Dashboard::addcategories');
$routes->get('deletecategory', 'Dashboard::deletecategory');
$routes->get('updatecategory', 'Dashboard::updatecategory');

//product
$routes->get('product', 'Dashboard::product');
$routes->get('addproduct', 'Dashboard::addproduct');
$routes->get('deleteproduct', 'Dashboard::deleteproduct');
$routes->get('updateproduct', 'Dashboard::updateproduct');

$routes->get('contactus', 'Dashboard::contactus');
$routes->get('users', 'Dashboard::users');
$routes->get('deleteuser', 'Dashboard::deleteuser');
$routes->get('logout', 'AdminUser::logout');

//Customer
$routes->get('login', 'CustomerUser::login');
$routes->get('logout', 'CustomerUser::logout');
$routes->get('CustomerDash', 'CustomerDash::dash');
