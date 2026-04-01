<?php

namespace App\Models;

class User {
    public function getName(){
        return "Atharva";
    }
}

namespace App\Controllers;

use App\Models\User;

class UserController {
    public function showUser(){
        $user = new User();
        echo "User: " . $user->getName();
    }
}

// Run
$obj = new UserController();
$obj->showUser();

?>