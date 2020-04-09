<?php
$number = 35;

if ($number > 25) {
    echo "Skaicius didesnis už 25 <br>";
}

$variable = "sd";

if (gettype($variable) == "integer") {
    echo "Tipas yra integer <br>";
}

$age = 25;

if (0 < $age && $age <= 12){
    echo "Jam yra " . $age . " m. Jis dar vaikas.<br>";
} else if (12 < $age && $age <=18) {
    echo "Jam yra " . $age . " m. Jis yra paauglys.<br>";
} else if (18 < $age && $age <=65) {
    echo "Jam yra " . $age . " m. Jis yra suaugęs.<br>";
} else echo "Jam yra " . $age . " m. Jis yra pensininkas.<br>";

$day = 5;

switch ($day) {
    case 1:
        echo "Pirmadienis<br>";
        break;
    case 2:
        echo "Antradienis<br>";
        break;
    case 3:
        echo "Trečiadienis<br>";
        break;
    case 4:
        echo "Ketvirtadienis<br>";
        break;
    case 5:
        echo "Penktadienis<br>";
        break;
    case 6:
        echo "Šeštadienis<br>";
        break;
    case 7:
        echo "Sekmadienis";
        break;
}
?>


