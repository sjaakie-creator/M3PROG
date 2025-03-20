<?php
$announcements =[
    "a.html",
    "b.html",
    "c.html"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $announcement = $announcements[$i];
    include "announcements/$announcement";
    ?>
</body>
</html>

<!-- http://localhost:88/04/array_include.php -->