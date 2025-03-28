<?php
if (isset($_GET['leeftijd']) && isset($_GET['opleiding'])) {
    $leeftijd = $_GET['leeftijd'];
    $opleiding = $_GET['opleiding'];

    echo "<h1>Student</h1>";
    echo "<p>Leeftijd: $leeftijd</p>";
    echo "<p>Opleiding: $opleiding</p>";
} else {
    echo "<p>Geen gegevens ontvangen.</p>";
}

?>

<!-- http://localhost:88/06/antwoord.php?leeftijd=17&opleiding=SD -->

<!-- http://localhost:88/06/antwoord.php?leeftijd=22&opleiding=ICT" -->