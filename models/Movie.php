<?php


require_once __DIR__ . "../Actors.php";

class Movie
{
    public $title;
    public $releaseYear;
    public $actors = [];
    function __construct(string $title, int $releaseYear)
    {
        $this->title = $title;
        $this->releaseYear =  $releaseYear;
    }
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }
    public function setActors(array $actors)
    {
        $this->actors = $actors;
    }
}

$fast_and_furious = new Movie('Fast and Furious', 2001);
$fast_and_furious->setActors([$vin_diesel, $paul_walker, $michelle_rodriguez, $jordana_brewster]);
$super_fast_and_super_furious = new Movie('Superfast & Superfurious', 2015);
$super_fast_and_super_furious->setActors([$dale_pavinski, $lili_mirojnick, $alex_ashbaugh,]);

$movies = [$fast_and_furious, $super_fast_and_super_furious];
