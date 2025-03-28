<?php
$winkel = [
    "winkel" => [
        "producten" => [
            [
                "productNaam" => "Laptop",
                "details" => [
                    "prijs" => 999.99,
                    "voorraad" => 50
                ]
            ],
            [
                "productNaam" => "Smartphone",
                "details" => [
                    "prijs" => 699.99,
                    "voorraad" => 100
                ]
            ]
        ]
    ]
];

$json = json_encode($winkel, JSON_PRETTY_PRINT);
file_put_contents("winkeldata.json", $json);

$jsonData = file_get_contents("winkeldata.json");
$winkelObj = json_decode($jsonData, true);

echo $winkelObj["winkel"]["producten"][1]["productNaam"] . "<br>";
echo "(" . $winkelObj["winkel"]["producten"][1]["details"]["prijs"] . " euro)<br><br>";
echo $winkelObj["winkel"]["producten"][0]["productNaam"] . "<br>";
echo $winkelObj["winkel"]["producten"][0]["details"]["voorraad"] . " op voorraad";
?>
