<?php

$totaalBesteld = 400;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje = false;
$cadeauWaarde = 0 . "euro";

if($totaalBesteld >= 100){
    $verzendKosten = 0;
}

if($totaalBesteld >= 250){
    $korting = 0.05;
}

if($totaalBesteld >= 400){
    $cadeautje = true;
}


$totaal = $totaalBesteld - ($korting * $totaalBesteld) + ($verzendKosten);

echo "Totaal van de bestelde artikelen: €$totaalBesteld<br>";
echo "Totaal met verzendkosten wordt: €$totaal<br>";

if($totaalBesteld > 1000){
    $korting = 7.5;
    $cadeauWaarde = 40 . " euro";
    echo "U krijgt ook een cadeautje ter waarde van $cadeauWaarde<br>";
}  elseif($cadeautje == true){
    $cadeauWaarde = 10 . " euro";
    echo "U krijgt ook een cadeautje ter waarde van $cadeauWaarde<br>";
}


?>

<!-- http://localhost:88/03/ korting.php -->