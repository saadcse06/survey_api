<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'oracle'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */
    'migrations' => 'migrations',
    'connections' => [
        'oracle' => [
            'driver' => 'oracle',
            'host' => '192.168.245.33',
//        'host' => '163.47.156.109',
            'port' => '1521',
            'database' => 'ORCL',
            'service_name' => 'orcl',
            'username' => 'survey',
            'password' => 'Survey#1521',
            'charset' => 'AL32UTF8',
            'prefix' => '',
        ]
    ]

];
