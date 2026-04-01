<?php

namespace MyApp;

class Test {
    public function show() {
        echo "This is MyApp namespace";
    }
}

$obj = new Test();
$obj->show();

?>