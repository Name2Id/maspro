<?php
require_once ('./slug/Slug.php');
require_once './render/Render.php';

#Ejemplo 1

/*
$sentence = new Render;

echo $sentence->words(['hola','mundo','jeje'])->link('-')->get();
*/

#Ejemplo 2

$slug = new Render;

echo $slug->sanitize()->render('Programacion Orientada A Objetos.');