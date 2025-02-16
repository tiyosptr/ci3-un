<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->post('/auth/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);
$routes->get('/agenda', 'AgendaController::index', ['filter' => 'auth']);
$routes->post('/agenda/tambah', 'AgendaController::tambah', ['filter' => 'auth']);
$routes->get('/agenda/edit/(:num)', 'AgendaController::edit/$1', ['filter' => 'auth']);
$routes->post('/agenda/update/(:num)', 'AgendaController::update/$1', ['filter' => 'auth']);
$routes->get('/agenda/delete/(:num)', 'AgendaController::delete/$1', ['filter' => 'auth']);
$routes->post('/agenda/getAgendaDetail', 'AgendaController::getAgendaDetail', ['filter' => 'auth']);
// Rute untuk Update Status
$routes->get('/agenda/updateStatus/(:num)', 'AgendaController::edit/$1', ['filter' => 'auth']);
$routes->post('/agenda/updateStatus/(:num)', 'AgendaController::updateStatus/$1', ['filter' => 'auth']);





