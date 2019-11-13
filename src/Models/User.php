<?php

namespace App\Models;

class User 
{
    protected $firstName;
    protected $lastName;

    public function __construct($firstName = null, $lastName = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLastName() {
        return $this->lastName;
    }
}