<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// 3. CodeIgniter 3 Version Page
$routes->get('welcome/old', 'Welcome::old');

// 2. Pagination with search filter (Pagination sample)
$routes->get('pagination', 'PaginationController::index');
$routes->get('loadRecord', 'PaginationController::loadRecord');

// 1. Static Pages
use App\Controllers\Pages;
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
