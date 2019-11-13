<?php

namespace Tests\Models;
use Tests\TestCase;

use App\Models\User; 

class UserTest extends TestCase 
{
    public function testCreateUserObject() {
        $user = new User();
        $this->assertInstanceOf(User::class, $user);
    }

    public function testCreateObjectWithArgs() {
        $user = new User('first', 'last');
        $this->assertEquals('first', $user->getFirstName());
        $this->assertEquals('last', $user->getLastName());
    }

    public function testSetFirstName() {
        $user = new User();
        $user->setFirstName('first-name');
        $this->assertEquals('first-name', $user->getFirstName());
    }

    public function testSetLastName() {
        $user = new User();
        $user->setLastName('last-name');
        $this->assertEquals('last-name', $user->getLastName());
    }
}