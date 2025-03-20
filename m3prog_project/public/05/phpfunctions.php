<?php

$hoeLangIsDitWoord = "Supercalifragilisticexpialidocious";
$woordLengte = strlen($hoeLangIsDitWoord);

print($woordLengte);



//vraag 1: wat is het type het argument van strlen?
// Het is een string

//vraag 2:wat is het type van wat strlen returned?
// Hij returned int (integer)

//vraag 3:het getal wat strlen returned, wat is dat?
// De lengte van de string in bytes

//vraag 4:hoevaak heb je nu strlen aangeroepen?
//3 x




print pow(2, 2);


print "<br>";


$tweeMacht2 = pow(2, 10);
print $tweeMacht2; 
print "<br>";

print pow(3, 4); 

print "<br>";


$drieMacht4 = pow(3, 4);
print $drieMacht4; 

// Vraag 1: Hoe geven we het resultaat door?
// Antwoord: We kunnen het resultaat doorgeven op twee manieren:
// 1. We slaan de return van de functie op in een variabele en printen die.
// 2. We geven de return van de functie direct als argument aan print mee.

print "<br>";

$naam = "Wario";
$naamGroot = strtoupper($naam);
print $naamGroot; 

print "<br>";

$naamKlein = strtolower($naamGroot);
print $naamKlein; 

print "<br>";

print $naam; 

?>


<!-- http://localhost:88/05/phpfunctions.php -->