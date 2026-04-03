<?php
namespace App;

class StringHelper {
    public function toUpper($str) {
        return strtoupper($str);
    }

    public function toLower($str) {
        return strtolower($str);
    }
}
