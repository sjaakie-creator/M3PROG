<?php
$bioscoop = [
    "films" => [
        [
            "titel" => "Inception",
            "details" => [
                "regisseur" => "Christopher Nolan",
                "jaar" => 2010,
                "genre" => "Sciencefiction"
            ]
        ]
    ]
];

header('Content-Type: application/json');
echo json_encode($bioscoop, JSON_PRETTY_PRINT);
?>
