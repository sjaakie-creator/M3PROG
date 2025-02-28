<?php
$standaardString = 'hello world<br>';
$extraString = "extra world<br>";

$voornaam = "Luigi";
$achternaam = "Mario";

$fullname = "$voornaam  $achternaam"; 

echo "$fullname";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//2

$naam = "Yoshi";
$onderTekentDoor = "directeur bowser";
$enemy = "Koopa Troopa's";


$emailText = "
Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$onderTekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>
";

echo $emailText;




?>

<!-- http://localhost:88/02/plak.php -->