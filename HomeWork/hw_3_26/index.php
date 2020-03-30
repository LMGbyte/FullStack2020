<?php
//» Sukurti funkciją, kuri ima 3 parametrus, ir atspausdina juos <h3> HTML tag
function weather(float $temp, float $hum, float $wind)
{
    echo "<h3>Temperatūra: " . $temp . " ° Drėgmė: " . $hum
        . " % Vėjo greitis: " . $wind . " m/s </h3>\n";
}

weather(12.5, 55, 15);

//» Sukurti funkciją, kuri ima 2 parametrus, juos sudaugina, ir grąžina rezultatą į iškvietimo vietą.
function multiply(int $x, int $y)
{
    echo "Skaičių $x ir $y sandauga lygi: " . $x * $y . "<br>\n";
}

multiply(3, 2);

//» Sukurti funkciją, kuri ima 1 parametrą ir grąžiną teigiamą reikšmę. (Patikrinti tipą).
function positive(int $x)
{
    if (is_numeric($x)) {
        return abs($x);
    }
}

echo positive("-255")."<br>";
?>

<?php
//Sukurti masyvus, kuriuose būtų aukščių matavimo duomenys ir juos sujungti.

//for ($i = 1; $i <= 10; $i++) {
//    $randomnum = rand(120, 200) / 10;
//    if ($i < 10){
//        echo "$randomnum,";}
//    else {
//        echo "$randomnum";}
//}

$one = [13.8,18.1,18.4,19.3,19.4,14.6,15.5,17.9,17,16.6];
$two = [14.1,16.9,12.2,13.2,13.2,12.2,17.3,13.6,12.6,13.2];
$three = [16.6,14.1,19.6,18,18.5,18.7,18,15.6,12.6,15];
//» Ištrinti iš masyvo elementą 3 skirtingais būdais

$main_array = array_merge($one,$two,$three);
//var_dump($main_array);

//» Sukurti masyvą, kuris aprašytų knygos duomenis.
//» Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas
?>

<?php
//Išvesti į ekraną 10 kartų žodį 'Labas';
//» Išvesti į ekraną skaičius nuo 1 iki 10;
//» Išvesti į ekraną skaičius nuo 10 iki 1;
//» Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;
//» Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
//» Išvesti į ekraną visų masyvo elementų sumą.;
//» Išvesti į ekraną visų masyvo elementų sandaugą.;
//» Išvesti į ekraną kas antrą masyvo elementą;
//» Funkciją, kuri apsuktų masyvo elementus (iš kito galo);
?>

<?php
//Išvesti visus masyvo elementus;
//» Išvesti visų masyvo elementų vidurkį;
//» Padidinti kiekviena masyvo elementą vienetu; » Išvesti automobilis masyvą į ekraną; (dvilypis
//masyvas);
//» Sukurti Fibonacci seką(tai tokia seka, kuomet
//sekantis skaičius yra sudedamas su prieš tai 2 einančiu.)
?>

<?php
//Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestu i ekrana. (||, while) Bonus
//» Metame 2 kauliukus (arba vieną kauliuką 2 kartus). taisyklės:
//Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote. Jeigu kauliukų suma daugiau už 5 ir:
//- išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
//- abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
//- kitais atvejais – kauliukas metamas dar kartą.
//» Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
//» Visa zaidimo eiga turėtų būti išvesta į ekraną.
?>