<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/Home', 'Home::index');
$routes->post('Home/GetSystems','Home::GetSystems');
$routes->post('Home/FindSystem','Home::FindSystem'); 
$routes->get('Home/AdminLogin','Home::AdminLogin');

$routes->group('',['filter' => 'authLogin'], function ($routes) {
    $routes->get('/', 'Auth\Authentication::index', ['as' => 'LoginForm']);

   
});
$routes->post('/login', 'Auth\Authentication::Login_validation', ['as' => 'login']); 
$routes->group('', ['filter' => 'auth'], function ($routes) { 
    $routes->get('/Logout', 'Auth\Authentication::logOut', ['as' => 'Logout']);
 
    $routes->group('Home', static function ($routes) {

        $routes->get('admin','Home::admin',['as' => 'Home/Admin']);
        $routes->post('AddSystem','Home::AddSystem');
        $routes->post('EditSystem','Home::EditSystem');
        
    });
});