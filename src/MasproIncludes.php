<?php
namespace App;
class MasproIncludes {
    public function estructura () {
        echo Maspro::_content();
            echo Maspro::_title('2');
            echo "Estructura de archivos y carpetas";
            echo Maspro::rg('h2');
            echo "<ol>
                <li>classes/</li>
                <li>css/</li>
                <li>files/</li>
                <li>Autoload</li>
                <li>index</li>
            </ol>";
        echo Maspro::rg('section');
    }
    public function container () {
        echo Maspro::_layout('./css/layout.css');
        echo Maspro::container();
        //write your code here.
        $this->estructura();
        echo Maspro::rg('main');
    }
    public function header_ () {
        echo Maspro::_header();
            echo Maspro::_title();
            echo "DOCUMENTANDO MI C&Oacute;DIGO.";
            echo Maspro::rg('h1');
        echo Maspro::rg('header');
    }
}