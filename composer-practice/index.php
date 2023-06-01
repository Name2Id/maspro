<?php

require_once './render/Render.php';

$sentence = new Render;

$sentence->words(['hola','mundo','jeje'])->link('-')->get();