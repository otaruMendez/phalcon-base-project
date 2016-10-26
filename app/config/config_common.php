<?php

return [
    'application' => [
        'modelsDir' => __DIR__ . '/../models/',
        'controllersDir' => __DIR__ . '/../controllers/',
        'libsDir' => __DIR__ . '/../library/',
        'interfacesDir' => __DIR__ . '/../interfaces/',
        'pluginsDir' => __DIR__ . '/../plugins/',
        'logsDir' => __DIR__ . '/../logs/',
        'constantsDir' => __DIR__ . '/../constants/',
        'middlewaresDir' => __DIR__ . '/../middleware/',
        'tasksDir' => __DIR__ . '/../tasks/',
        'appDir' => __DIR__ . '/../'
    ],

    'appParams' => [
        'appNamespace' => 'App',
        'appName' => 'App',
        'appVersion' => '1.0'
    ],

    'database' => [
        'adapter' => 'Mysql',
        'host' => getenv('DB_HOST'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'dbname' => getenv('DB_NAME')
    ],

    'environment' => getenv('APPLICATION_ENV'),

    'debug' => (getenv('DEBUG') == 'true') ? true : false,
];