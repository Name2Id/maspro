<?php
namespace App;
use App\Maspro;
class MasproIncludes {
    public function estructura () {
        echo Maspro::_content();
            echo Maspro::_title('2');
            echo "Estructura de archivos y carpetas";
            echo rg('h2');
            echo "<ol>
                <li>classes/</li>
                <li>css/</li>
                <li>files/</li>
                <li>Autoload</li>
                <li>index</li>
            </ol>";
        echo rg('section');
    }
    public function container () {
        echo Maspro::_layout('../maspro/public/css/layout.css');
        echo Maspro::container();
        //write your code here.
        $this->estructura();
        echo rg('main');
    }
    public function header_ () {
        echo Maspro::_header();
            echo Maspro::_title();
            echo "DOCUMENTANDO MI C&Oacute;DIGO.";
            echo rg('h1');
        echo rg('header');
    }
}