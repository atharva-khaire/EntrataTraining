<?php

// 1. __construct() & __destruct()
class Person {
    public $name;

    function __construct($name){
        $this->name = $name;
        echo "Constructor called for $name\n";
    }

    function __destruct(){
        echo "Object destroyed\n";
    }
}

$p1 = new Person("Atharva");


// 2. __get() and __set()
class User {
    private $data = [];

    public function __set($key, $value){
        $this->data[$key] = $value;
    }

    public function __get($key){
        return $this->data[$key] ?? "Not Found";
    }
}

$u = new User();
$u->name = "John";
echo $u->name . "\n";


// 3. __call() → for undefined methods
class Test {
    public function __call($name, $arguments){
        echo "Method '$name' not found\n";
    }
}

$t = new Test();
$t->hello(); // undefined method


// 4. __toString() → object to string
class Car {
    public $brand;

    function __construct($brand){
        $this->brand = $brand;
    }

    function __toString(){
        return "Car Brand: " . $this->brand;
    }
}

$c = new Car("BMW");
echo $c . "\n";


// 5. __invoke() → object as function
class Calculator {
    public function __invoke($a, $b){
        return $a + $b;
    }
}

$calc = new Calculator();
echo $calc(5, 3) . "\n";


// 6. __isset() and __unset()
class Demo {
    public $x = 10;
}

$d = new Demo();

if(isset($d->x)){
    echo "x is set\n";
}

unset($d->x);


// 7. __clone()
class Animal {
    public $type = "Dog";
}

$a1 = new Animal();
$a2 = clone $a1;
echo $a2->type . "\n";


// 8. __sleep() & __wakeup()
class Sample {
    public $data = "Hello";

    public function __sleep(){
        return ["data"];
    }

    public function __wakeup(){
        echo "Object unserialized\n";
    }
}

$s = new Sample();
$serialized = serialize($s);
$unserialized = unserialize($serialized);

?>