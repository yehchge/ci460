<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// 12. ci_tutorial
use App\Controllers\Admin;

$routes->get('admin', [Admin::class, 'index']);
$routes->get('admin/home', [Admin::class, 'home']);
$routes->get('admin/login', [Admin::class, 'login']);
$routes->post('admin/login/(:segment)', [Admin::class, 'login']);
$routes->post('admin/create_user', [Admin::class, 'create_user']);
$routes->get('admin/logout', [Admin::class, 'logout']);
$routes->get('admin/delete_user/(:num)', [Admin::class, 'delete_user']);

use App\Controllers\Dashboard;
$routes->get('dashboard', [Dashboard::class, 'index']);
$routes->get('dashboard/login', [Dashboard::class, 'login']);
$routes->post('dashboard/login/(:segment)', [Dashboard::class, 'login']);
$routes->get('dashboard/home', [Dashboard::class, 'home']);
$routes->get('dashboard/logout', [Dashboard::class, 'logout']);
$routes->get('dashboard/account', [Dashboard::class, 'account']);

// 11. RESTful API JWT Authentication
$routes->group("api", function($routes){
    $routes->post('register', 'ApiRegister::index');
    $routes->post('login', 'ApiLogin::index');
    $routes->get('users', 'ApiUser::index', ['filter' => 'authFilter']);
});

// 10. RESTful API
// $routes->resource('employee');
// $routes->resource('employee', ['only' =>['index', 'create', 'show', 'update', 'delete']]);
$routes->resource('employee', ['except' =>['new', 'edit']]);
$routes->presenter('emp');

// $routes->get('employee/new', 'Employee::new');
// $routes->post('employee', 'Employee::create');
// $routes->get('employee', 'Employee::index');
// $routes->get('employee/(:segment)', 'Employee::show/$1');
// $routes->get('employee/(:segment)/edit', 'Employee::edit/$1');
// $routes->put('employee/(:segment)', 'Employee::update/$1');
// $routes->patch('employee/(:segment)', 'Employee::update/$1');
// $routes->delete('employee/(:segment)', 'Employee::delete/$1');

// 9. Working with Uploaded Files
use App\Controllers\Upload;
$routes->get('upload', [Upload::class, 'index']);          // Add this line.
$routes->post('upload/upload', [Upload::class, 'upload']); // Add this line.

// 8. News Section
use App\Controllers\News;
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

// 7. Custom Pagination
$routes->get('codestar', 'Main::index');

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
