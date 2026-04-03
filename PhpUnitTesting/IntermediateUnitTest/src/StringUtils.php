<?php
namespace App;

class StringUtils {
    public function isPalindrome($str) {
        $clean = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
        return $clean === strrev($clean);
    }
}
