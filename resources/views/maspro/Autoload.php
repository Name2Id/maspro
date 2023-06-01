<?php

function rg ($tag) {
    return "</".$tag.'>';
}

function autoload (string $class) {
    include_once "classes/".$class.".php";
}

spl_autoload_register ('autoload');