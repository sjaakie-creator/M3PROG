<?php
$title = "Mijn Mooie Website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame = "assasin's creed";
$mooisteGetal = 42;
$favorieteShow = "The boys";
$leuksteStad = "Amsterdam";

echo $title;
echo $datum;
echo $tijd;
echo $favorieteGame;
echo $mooisteGetal;
?>

<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $tijd?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame;?></p>
        <p><h2>Mooiste Getal:</h2><?= $mooisteGetal ?></p>
        <p><h2>Favoriete Show:</h2><?= $favorieteShow ?></p>
        <p><h2>Leukste Stad:</h2><?= $leuksteStad ?></p>
    </body>
</html>

<!-- http://localhost:88/01/phphtml_var.php -->