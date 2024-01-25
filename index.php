<?php
require_once __DIR__ . `/movies/movies.php`
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>
    <header class="bg-info text-center p-3">
        <h1>Movies</h1>
    </header>
    <main>
        <section class="d-flex p-3 ">
            <p class="card m-4 p-2">
                <?php
                $SpiderMan = new Movie('https://media-assets.wired.it/photos/64777453819a9a3fbb232baa/16:9/w_2240,c_limit/Spider-Man.jpg', 'Spider_Man', 'Action', 'english', 'After being bitten by a genetically-modified spider, a shy teenager gains spider-like abilities that he uses to fight injustice as a masked superhero and face a vengeful enemy.');
                echo "img" . $SpiderMan->getFilmCover() . "<br>";
                echo "Titolo originale: " . $SpiderMan->getOriginalTitle() . "<br>";
                echo "Genere: " . $SpiderMan->getGenre() . "<br>";
                echo "Lingua originale: " . $SpiderMan->getLanguage() . "<br>";
                echo "Trama: " . $SpiderMan->getPlot() . "<br>";

                ?>
            </p>
            <p class="card  m-4 p-2">
                <?php
                $Deadpool = new Movie('https://upload.wikimedia.org/wikipedia/it/a/ac/Deadpool_film_2.png', 'Deadpool', 'Action', 'english', 'A wisecracking mercenary gets experimented on and becomes immortal yet hideously scarred, and sets out to track down the man who ruined his looks.');
                echo "img" . $Deadpool->getFilmCover() . "<br>";
                echo "Titolo originale: " . $Deadpool->getOriginalTitle() . "<br>";
                echo "Genere: " . $Deadpool->getGenre() . "<br>";
                echo "Lingua originale: " . $Deadpool->getLanguage() . "<br>";
                echo "Trama: " . $Deadpool->getPlot() . "<br>";
                ?>
            </p>
        </section>
    </main>





</body>

</html>