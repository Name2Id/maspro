<?php
namespace App;
class Maspro {
    public static function container () {
        return "<main class=\"container\">";
    }
    public static function _header () {
        return "<header class=\"header\">";
    }
    public static function _content () {
        return "<section class=\"content\">";
    }
    public static function _title ($size='1') {
        return "<h$size class=\"titles\">";
    }
    public static function _p () {
        return "<p class=\"p\">";
    }
    public static function rg ($tag) {
        return "</".$tag.'>';
    }
    public static function _layout ($path) {
        return "<link rel=\"stylesheet\" href=\"$path\">";
    }
    public static function _display ($file) {
        require_once $file;
    }
}