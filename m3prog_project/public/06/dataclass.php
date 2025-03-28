<?php
class Student {
    public $name;
    public $gemiddeldeCijfer;
    public $klas;
}

class DataObject {
    public $studenten;
}

$mario = new Student();
$mario->name = "Mario";
$mario->gemiddeldeCijfer = 8;
$mario->klas = "1A";

$wario = new Student();
$wario->name = "Wario";
$wario->gemiddeldeCijfer = 6;
$wario->klas = "1B";

$bowser = new Student();
$bowser->name = "Bowser";
$bowser->gemiddeldeCijfer = 5;
$bowser->klas = "2A";

$peach = new Student();
$peach->name = "Peach";
$peach->gemiddeldeCijfer = 9;
$peach->klas = "2B";

$dataObject = new DataObject();
$dataObject->studenten = [$mario, $wario, $bowser, $peach];

echo "<h1>Studenten Overzicht</h1>";
foreach ($dataObject->studenten as $student) {
    echo "<p><strong>Naam:</strong> $student->name</p>";
    echo "<p><strong>Gemiddelde Cijfer:</strong> $student->gemiddeldeCijfer</p>";
    echo "<p><strong>Klas:</strong> $student->klas</p>";
    echo "<hr>";
}
?>
