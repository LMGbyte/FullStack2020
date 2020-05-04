<?php
require_once 'boot.php';

$dsns = sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE'));
$db = new PDO($dsns, env('DB_USERNAME'), env('DB_PASSWORD'));

$stmt = $db->prepare('SELECT * FROM `data` WHERE `period`=:period AND `util_id`=:utilid;');
$stmt->bindParam(':utilid', $_POST['utility']);

if (is_numeric($_SESSION['monthn'])){
    if ($_SESSION['monthn']<10){
        $_SESSION['period'] = $_SESSION['year'].'0'.$_SESSION['monthn'];
    }else{
        $_SESSION['period'] = $_SESSION['year'].$_SESSION['monthn'];
    }
}

$stmt->bindParam(':period', $_SESSION['period']);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);

if (sizeof($result)>0){
    $_SESSION['notice']='Toks mokestis jau ivestas';
    header('location: '. $_SERVER['HTTP_REFERER']);
}