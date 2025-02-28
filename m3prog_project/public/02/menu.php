<?php
$gerechtype = "hoofd";
$naamgerecht = "pasta pesto";
$beschrijving = "Een echte italiaanse pasta";
$ingredientenlijst = "Pasta en pesto";
$allergienlijst = "noten vlees bloemen stof gras";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>gerecht type: <?=$gerechtype;?></p>

    <p><?=$naamgerecht; ?> $12,60</p>

    <p><?=$beschrijving;?> <br> <?=$ingredientenlijst;?></p>

    <p>bent u allergisch? bekijk de allergen:
        <br>
        <?=$allergienlijst;?>
    </p>
</body>
</html>


<!--http://localhost:88/02/menu.php -->