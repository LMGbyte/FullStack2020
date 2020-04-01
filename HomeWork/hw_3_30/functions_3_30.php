<?php
//=========================
//"Nupieškite" tokio tipo piramidę:
//1
//22
//333
//4444
//55555
//666666
//7777777
//88888888
//999999999
function pyramid()
{
    $st_ret = '';
    for ($i = 1; $i <= 9; $i++) {
        $st_ret .= str_repeat($i, $i) . '<br>';
    }
    return $st_ret;
}

//=========================
//Parašykite funkciją kuri unserscore_case konvertuoja i camelCase;
function convert($str)
{
    for ($i = 0; $i <= strlen($str) - 1; $i++) {
        if ($str[$i] == '_' && $i != strlen($str) - 1) {
            $str[$i + 1] = strtoupper($str[$i + 1]);
        }
    }
    return str_replace('_', '', $str);
}

//=========================
//Parašykite funkciją kuri priima kaip argumentą/paramėtrą "2014-12-31" formato datą ir grąžina zodiako ženklą.
function zodiac($datein)
{
    $regular_date = '^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])^';
    if (preg_match($regular_date, $datein) == false) {
        return 'Blogas datos formatas';
    };
    $date = date_parse_from_format('Y-m-d', $datein);
    $mon = $date['month'];
    $day = $date['day'];

    $daytags = [22, 20, 18, 20, 20, 21, 21, 22, 21, 23, 23, 22, 22];
    $signs = [
        'Ožiaragis',
        'Vandenis',
        'Žuvys',
        'Avinas',
        'Tauras(Jautis)',
        'Dvyniai',
        'Vėžys',
        'Liūtas',
        'Mergelė',
        'Svarstyklės',
        'Skorpionas',
        'Šaulys',
        'Ožiaragis'];
    if ($day <= $daytags[$mon]) {
        $result = $signs[$mon - 1];
    } else {
        $result = $signs[$mon];
    };
    return $result;
}

//========================
//Parašykite funkciją kuri priima kaip argumentą/paramėtrą skaičių ir grąžina panašų masyvą.
//Pvz 4 --> [1, [2], [[3]], [[[4]]] ], 5 --> [1, [2], [[3]], [[[4]]], [[[[5]]]] ].


?>