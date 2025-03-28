<?php
if (isset($_GET['celsius'])) {
    $input = $_GET['celsius'];
    $celsius = floatval($input);
    $fahrenheit = ($celsius * 9/5) + 32;

    echo "<h1>Temperatuur omrekening</h1>";
    echo "<p>Temperatuur in Celsius: $celsius °C</p>";
    echo "<p>Temperatuur in Fahrenheit: $fahrenheit °F</p>";
} else {
    echo "<p>Geen temperatuur opgegeven.</p>";
}

?>

<!-- http://localhost:88/06/fahrenheit.php?celsius=25 -->