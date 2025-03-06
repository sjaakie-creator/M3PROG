<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten Berekening</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        .highlight {
            font-weight: bold;
            color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reiskosten Berekening</h1>
        <?php
        $afstand = 928.47;
        $prijsPerLiter = 1.89;
        $prijsTrein = 60.00;
        $tankinhoud = 50;
        $verbruikPerKm = 1 / 15;
        
        $litersVerbruikt = $afstand * $verbruikPerKm;
        $kostenAuto = $litersVerbruikt * $prijsPerLiter;
        $aantalTankbeurten = ceil($litersVerbruikt / $tankinhoud);
        
        echo "<p>Totale afstand: <span class='highlight'>{$afstand} km</span></p>";
        echo "<p>Totale kosten met de auto: <span class='highlight'>€" . number_format($kostenAuto, 2) . "</span></p>";
        echo "<p>Aantal liters benzine verbruikt: <span class='highlight'>" . number_format($litersVerbruikt, 2) . " liter</span></p>";
        echo "<p>Aantal keer tanken: <span class='highlight'>{$aantalTankbeurten} keer</span></p>";
        
        if ($kostenAuto > $prijsTrein) {
            echo "<p class='highlight'>Ik ga met de trein.</p>";
        } else {
            echo "<p class='highlight'>Ik ga met de auto.</p>";
        }
        ?>
    </div>
</body>
</html>

<!-- http://localhost:88/03/reiskosten.php -->