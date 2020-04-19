<?php
//require_once 'boot.php';

//Sukurkite žurnalo klasę. Ši klasė turėtų turėti šiuos metodus: išsaugoti žurnale, gauti paskutinius N įrašų, išvalyti žurnalą.

class logmanage
{

    public function appednLog($new_data, $fn)
    {
        if (!is_null($new_data) && !is_null($fn)) {
            if (file_exists(LOG_FILE)) {
                $data = file_get_contents(LOG_FILE);
                $data = json_decode($data, true);

                if (!is_null($data)) {
                    array_push($data, $new_data);
                } else{
                    $data = $new_data;
                }
            } else {
                $data = $new_data;
            }
            $jsondata = json_encode($data, JSON_PRETTY_PRINT);
            file_put_contents($fn, $jsondata);
        }
    }

    public function returnLast($fn, $n)
    {

    }

    public function clean($fn)
    {

    }


    public function show()
    {
        if (file_exists(LOG_FILE)) {
            $data = file_get_contents(LOG_FILE);
            $data = json_decode($data, true);
            die(var_dump($data));
        }
    }

}

//Sukurkite sesijų klasę - wrapper'į. Turėtų būti tokie metodai: sukurti sesijos kintamąjį, gauti sesijos kintamąjį, ištrinti sesijos kintamąjį, patikrinti egzistoja sesijos kintamasis.
//Sesija turėtų prasidėti (session_start) __construct metode.

class sess
{

}
