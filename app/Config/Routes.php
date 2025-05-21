<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

$routes->setAutoRoute(false);

$routes->get('/', 'Home::index');

$routes->get('/registrasi', 'Registrasi::index');

$routes->get('/blog', 'Blog::index');
$routes->get('/salam/nama/(:any)', 'Salam::nama/$1');

$routes->group('template', static function ($routes) {
    $routes->get('/', "Template::index");
    $routes->get('(:any)', "template::$1");
});

$routes->group('belajarlibrary', static function (RouteCollection $routes) {
    $routes->get('/', 'BelajarLibrary::index');

    $routes->get('login', 'BelajarLibrary::login');
    $routes->get('logout', 'BelajarLibrary::logout');
    $routes->get('cobalib', 'BelajarLibrary::cobalib');
});

$routes->group('mahasiswa', static function ($routes) {
    $routes->get('/', "Mahasiswa::index");
    $routes->get('add', "Mahasiswa::add");
    $routes->get('show', "Mahasiswa::show");
    $routes->get('edit/(:segment)', "Mahasiswa::edit/$1");
    $routes->get('delete/(:segment)', "Mahasiswa::delete/$1");
    $routes->post('submit', "Mahasiswa::submit");
    $routes->post('update/(:segment)', 'Mahasiswa::update/$1');
});

$routes->group('dashboard', static function ($routes) {
    $routes->get('/', "dashboard::index");
    $routes->get('(:any)', "dashboard::$1");
});