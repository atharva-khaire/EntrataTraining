<?php
use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase {
    public function testGetName() {
        $user = new User("Atharva");
        $this->assertEquals("Atharva", $user->getName());
    }
}
