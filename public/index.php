<?php

require_once '../vendor/autoload.php';
require_once '../config/database.php';

$products = App\Entities\Product::get();

require_once ('../resources/views/maspro.php');