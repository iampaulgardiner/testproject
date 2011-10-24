<?php

	defined('SYSPATH') or die ('Script Access Disabled');
	
	
	return array
	(
	    'default' => array
	    (
	        'type'       => 'mysql',
	        'connection' => array(
	            'hostname'   => 'localhost',
	            'username'   => 'root',
	            'password'   => 'root',
	            'persistent' => FALSE,
	            'database'   => 'choices',
	        ),
	        'table_prefix' => '',
	        'charset'      => 'utf8',
	        'profiling'    => TRUE,
	    ),
	    'remote' => array(
	        'type'       => 'mysql',
	        'connection' => array(
	            'hostname'   => '55.55.55.55',
	            'username'   => 'remote_user',
	            'password'   => 'mypassword',
	            'persistent' => FALSE,
	            'database'   => 'my_remote_db_name',
	        ),
	        'table_prefix' => '',
	        'charset'      => 'utf8',
	        'profiling'    => TRUE,
	    ),
	);
