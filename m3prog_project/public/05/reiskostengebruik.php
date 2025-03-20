<?php
include_once "reiskosten.php";

$prijs_berlijn = berekenKosten(1500, 0.013);
$prijs_stockholm = berekenKosten(2000, 0.015);

echo "Berlijn: €" . number_format($prijs_berlijn, 2) . "<br>";
echo "Stockholm: €" . number_format($prijs_stockholm, 2);
?>
