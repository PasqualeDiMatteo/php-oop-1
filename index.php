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
$movie = new Movie('Fast and Furious', 2001);
$movie->setActors(["Vin Diesel ", "Paul Walker", "Michelle Rodriguez", "Jordana Brewster"]);
var_dump($movie);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>

<body>

</body>

</html>