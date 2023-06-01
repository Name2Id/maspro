<?php
class Slug {
    public function render ($string) {
        $slug = str_replace(" ","-",$string);
        $slug = preg_replace('/[^\w\d\-\_]/i','',$slug);
        return strtolower($slug);
    }
}