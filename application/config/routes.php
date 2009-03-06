<?php defined('SYSPATH') or die('No direct access');

// Remove the standard default route
unset($configuration['_default'], $config['_default']);

$config['user'] = array
(
	'uri' => 'user/:method',
	'allowed_roles' => array
	(
		'login',
		'admin',
	),
	'defaults' => array
	(
		'controller' => 'user',
		'method' => 'profile',
	),
);

$config['documentation'] = array
(
	'uri' => 'docs/:name',
	'allowed_roles' => NULL,
	'defaults' => array
	(
		'controller' => 'documentation',
		'method' => 'load',
		'name' => FALSE,
	),
);

$config['admin'] = array
(
	'uri' => 'admin/:controller/:method/:id',
	'allowed_roles' => NULL,
	'prefix' => array('controller' => 'admin_'),
	'defaults' => array
	(
		'controller' => 'main',
		'method' => 'home',
		'id' => FALSE,
	),
);

$config['default'] = array
(
	'uri' => ':controller/:method/:id',
	'allowed_roles' => NULL,
	'defaults' => array
	(
		'controller' => 'main',
		'method' => 'home',
		'id' => FALSE,
	),
);