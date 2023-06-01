<?php

require_once './render/Render.php';

$sentence = new Render;

echo $sentence->words(['hola','mundo','jeje'])->link('-')->get();