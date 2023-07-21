<?php

require_once __DIR__ . "./Movie.php";

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

$vin_diesel = new Actor("Vin", "Diesel", 56);
$paul_walker = new Actor("Paul", "Walker", 40);
$michelle_rodriguez = new Actor("Michelle", "Rodriguez", 45);
$jordana_brewster = new Actor("Jordana", "Brewster", 43);
$dale_pavinski = new Actor("Dale", "Pavinski", 50);
$lili_mirojnick = new Actor("Lili", "Mirojnick", 40);
$alex_ashbaugh = new Actor("Alex", "Ashbaugh", 30);
