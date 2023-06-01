<?php

require_once '../vendor/autoload.php';
require_once '../config/database.php';

ob_start();
$products = App\Entities\Product::get();
require_once ('../resources/views/maspro.php');
$dompdf = new Dompdf\Dompdf();
$dompdf->loadHtml(ob_get_clean());
$dompdf->render();
$dompdf->stream();