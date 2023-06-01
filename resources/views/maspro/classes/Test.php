<?php

/**
 * El auto load tambien funciona
 * con trait. ademas de class.
 */

trait Test {
    public static function test () {
        return "si funciona el autoload";
    }
}