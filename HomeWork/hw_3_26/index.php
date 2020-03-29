<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 03 26 (PHP)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="css/modalCSS.css">-->
</head>
<body>

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header"></p>
    <div class="card-body text-center">
        <?php

        ?>
    </div>
</div>

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header">Sukurti funkciją, kuri ima 3 parametrus, ir atspausdina juos h3 HTML tag</p>
    <div class="card-body text-center">
        <?php
        function weather(float $temp, float $hum, float $wind)
        {
            echo "<h3>Temperatūra: " . $temp . " ° Drėgmė: " . $hum
                . " % Vėjo greitis: " . $wind . " m/s </h3>\n";
        }

        ;

        weather(12.5, 55, 15);
        ?>
    </div>
</div>


<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header">Sukurti funkciją, kuri ima 2 parametrus, juos sudaugina, ir grąžina rezultatą į iškvietimo
        vietą.</p>
    <div class="card-body text-center">
        <?php
        function multiply(int $x, int $y)
        {
            echo "Skaičių $x ir $y sandauga lygi: " . $x * $y . "<br>\n";
        }

        multiply(3, 2);
        ?>
    </div>
</div>

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header">Sukurti funkciją, kuri ima 1 parametrą ir grąžiną teigiamą reikšmę. (Patikrinti tipą).</p>
    <div class="card-body text-center">
        <?php
        function positive(int $x)
        {
            if (is_numeric($x)) {
                echo abs($x) . "<br>";
            }
        }

        positive("-255");
        ?>
    </div>
</div>

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header">Sukurti masyvus, kuriuose būtų aukščių matavimo duomenys ir juos sujungti.</p>
    <div class="card-body text-center">
        <?php
        $one = [13.8, 18.1, 18.4, 19.3, 19.4, 14.6, 15.5, 17.9, 17, 16.6];
        $two = [14.1, 16.9, 12.2, 13.2, 13.2, 12.2, 17.3, 13.6, 12.6, 13.2];
        $three = [16.6, 14.1, 19.6, 18, 18.5, 18.7, 18, 15.6, 12.6, 15];

        function printall($name, $arrayToPrint, $nwl)
        {
            echo $name . ": ";
            foreach ($arrayToPrint as $value) {
                echo $value . " ";
            };
            if ($nwl) {
                echo "<br>";
            }
        }

        ;
        printall("Pirmas masyvas", $one, true);
        printall("Antras masyvas", $two, true);
        printall("Trečias masyvas", $three, true);

        $main_array = array_merge($one, $two, $three);
        printall("Bendras masyvas:", $main_array, false);
        ?>
    </div>
</div>

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header">Sukurti masyvą, kuris aprašytų knygos duomenis.</p>
    <div class="card-body text-center">
        <?php
        $book = [
            "year" => 2020,
            "name" => "The Scent Keeper",
            "pages" => 352,
        ];
        $books = [
            "9786094870262" => [
                "year" => 2020,
                "name" => "The Scent Keeper",
                "pages" => 352,
            ],
            "9786094793004" => [
                "year" => 2020,
                "name" => "MISIJA TALENTAI: kaip atrinkti, pritraukti ir išlaikyti geriausius",
                "pages" => 248,
            ],
            "9789955372233" => [
                "year" => 2020,
                "name" => "Plunksnuoti mūsų kaimynai",
                "pages" => 160,
            ],
        ];
        echo $books["9789955372233"]["name"];
        ?>
    </div>
</div>

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

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header">Išvesti visus masyvo elementus</p>
    <div class="card-body text-center">
        <?php
        function average($arrayin)
        {
            $sum = 0;
            $count = 0;
            foreach ($arrayin as $value) {
                if (is_numeric($value)) {
                    $sum += $value;
                    $count += 1;
                };
            };
            return $sum / $count;
        }

        printall("Visi masyvo elementai: ", $main_array, true);
        echo "Vidurkis: " . average($main_array)
        ?>
    </div>
</div>

<!--» Padidinti kiekviena masyvo elementą vienetu;-->
<!--» Išvesti automobilis masyvą į ekraną (dvilypis masyvas);-->

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header">Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai
        2 einančiu)</p>
    <div class="card-body text-center">
        <?php
        function fibonacci($initArray, $length)
        {
            if (count($initArray) == 2 && $length > 2) {
                for ($i = 2; $i < $length; $i++) {
                    array_push($initArray, ($initArray[$i - 2] + $initArray[$i - 1]));
                };
            };
            $arrayString = "";
            foreach ($initArray as $value) {
                $arrayString = $arrayString . $value . " ";
            };
            return $arrayString;
        }

        echo fibonacci([1, 2], 15);
        ?>
    </div>
</div>

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

</body>
</html>

