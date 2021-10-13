<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
		'db'=>array(
			//'connectionString' => 'pgsql:'.dirname(__FILE__).'/../data/backlog.db',
            'db' => require(__DIR__ . 'db.php'),
		),
		// uncomment the following to use a MySQL database

        'db'=>array(
            'connectionString' => 'pgsql:host=localhost;port=5234;dbname=backlog',
            'emulatePrepare' => true,
            'username' => 'postgres',
            'password' => 'mamut321.',
            'charset' => 'utf8',
        ),

    ),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),

	//),
);