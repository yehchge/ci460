<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// 6. Pagination Specifying the URI Segment for Page
$routes->get('pgusers/(:segment)', 'PaginationController::getAll');
$routes->get('pgusers', 'PaginationController::getAll');

// 5. maintenance Page
$routes->get('maintenance', 'Maintenance::index');

// 4. Smarty sample
$routes->get('smarty', "Smarty::index");

// 3. CodeIgniter 3 Version Page
$routes->get('welcome/old', 'Welcome::old');

// 2. Pagination with search filter (Pagination sample)
$routes->get('pagination', 'PaginationController::index');
$routes->get('loadRecord', 'PaginationController::loadRecord');

// 1. Static Pages
use App\Controllers\Pages;
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
