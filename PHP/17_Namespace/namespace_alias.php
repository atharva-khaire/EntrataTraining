<?php

namespace App\First;

class Demo {
    public function sayHello(){
        echo "Hello from First Namespace<br>";
    }
}

namespace App\Second;

use App\First\Demo as FirstDemo;

$obj = new FirstDemo();
$obj->sayHello();

?>