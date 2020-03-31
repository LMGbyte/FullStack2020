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
        if ($str[$i] == '_' && $i != strlen($str)-1) {
            $str[$i + 1] = strtoupper($str[$i + 1]);
        }
    }
    $str = str_replace ('_','',$str);
    return $str;
}

//=========================
//Parašykite funkciją kuri priima kaip argumentą/paramėtrą "2014-12-31" formato datą ir grąžina zodiako ženklą.


//========================
//Parašykite funkciją kuri priima kaip argumentą/paramėtrą skaičių ir grąžina panašų masyvą.
//Pvz 4 --> [1, [2], [[3]], [[[4]]] ], 5 --> [1, [2], [[3]], [[[4]]], [[[[5]]]] ].


?>