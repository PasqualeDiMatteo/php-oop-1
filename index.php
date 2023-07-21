<?php
class Movie
{
    public $title;
    public $releaseYear;
    function __construct(string $title, int $releaseYear)
    {
        $this->title = $title;
        $this->releaseYear =  $releaseYear;
    }
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }
}
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