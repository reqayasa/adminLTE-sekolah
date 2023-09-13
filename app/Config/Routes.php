<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin\Blank;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', static function ($routes) {
    $routes->get('blank', [Blank::class, 'index'], ['as' => 'admin_blank']);
});


