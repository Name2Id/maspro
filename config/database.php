<?php

use Illuminate\Database\Capsule\Manager as Conexion;

$conx = new Conexion;

$conx->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'test',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$conx->bootEloquent();