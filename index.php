<?php
/**
 * KHIND RTO - Front Controller
 * Single entry point for all requests.
 */

define('ROOT', __DIR__);

// Load config (constants)
require_once ROOT . '/config/config.php';

// Load core helpers and classes
require_once ROOT . '/core/helpers.php';
require_once ROOT . '/core/Router.php';

// Load models
require_once ROOT . '/app/models/Product.php';
require_once ROOT . '/app/models/Agent.php';

// Register routes
$router = new Router();
$router->add('',        'HomeController',    'index');
$router->add('catalog', 'CatalogController', 'index');
$router->add('join',    'JoinController',    'index');

// Dispatch
$router->dispatch();
