<?php

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
