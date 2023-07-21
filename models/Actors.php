<?php

class Actor
{
    public $firsName;
    public $lastName;
    public $age;
    function __construct(string $firsName, string $lastName, int $age)
    {
        $this->firsName = $firsName;
        $this->lastName =  $lastName;
        $this->age =  $age;
    }
    public function getFullName()
    {
        return $this->firsName . " " . $this->lastName;
    }
}

$actor = new Actor("Vin", "Diesel", 56);

var_dump($actor);
