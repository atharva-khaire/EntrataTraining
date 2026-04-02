<?php
namespace App;

class ArrayHelper {
    public function sum(array $arr) {
        return array_sum($arr);
    }

    public function max(array $arr) {
        return max($arr);
    }
}
