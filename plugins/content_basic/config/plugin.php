<?php

$config['content_basic'] = array
(
	'name'          => 'YurikoCMS Basic Content',
	'description'   => 'Adds the ability to create basic text content for your pages',
	'notice_enable' => 'Are you sure you want to enable this plugin?',
	'notice_disable'=> 'Disable the Basic Content plugin?',
	'version'       => '0.1.2',
	'installer'		=> 1,
	'dependencies'  => array
	(
		'core'     => array('0.2.0'),
	),
	'arguments' => array
	(
		//default arguments
		'defaults' => array
		(

		),
		'key' => 'basic',
	),
);
