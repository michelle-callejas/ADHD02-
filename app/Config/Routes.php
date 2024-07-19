<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_regiones', 'Region::index');
$routes->get('ver_departamentos', 'Departamentos::index');
$routes->get('ver_municipios', 'Municipios::index');
$routes->get('ver_niveles', 'NivelesAcademicos::index');
$routes->get('ver_ciudadanos', 'Ciudadanos::index');