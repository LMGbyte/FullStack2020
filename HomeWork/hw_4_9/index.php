<?php
require_once 'boot.php';
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 04 09 (PHP)</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>

<?php
if (isset($_POST['idInput']) && isset($_POST['idPass'])) {
    if ($_POST['idInput'] == 'qwerty' && $_POST['idPass'] == 'qwerty') {
        $_SESSION['pass'] = true;
    } else {
        echo '<script> alert(\'Duomenys neteisingi\') </script>';
    }
}
?>

<?php

if (!$_SESSION['pass']) {

    echo '<form method="post" action="index.php">
    <div class="form-group m-4">
        <label for="idInput">Vardas:</label>';
// Panaudojama Input funkcija
    fInput('text', 'form-control', 'idInput', 'idInput');
    echo '
    </div>
        <div class="form-group m-4">
            <label for="idPass">Slaptažodis:</label>';
    // Panaudojama Input funkcija
            fInput('password', 'form-control', 'idPass', 'idPass');
    echo '
    </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Prisijungti</button>
        </div>
    </form>';
}
?>

<?php
if ($_SESSION['pass'] == true) {
    echo '
<form method="post" action="output.php">
    <div class="form-group m-4">
        <label for="idNameInput">Vardas:</label>
        <input type="text" class="form-control" id="idNameInput" name="idNameInput">
    </div>
    <div class="form-group form-check m-4">
        <input type="checkbox" class="form-check-input" id="idCheck" name="idCheck">
        <label class="form-check-label" for="idCheck">Pasveikink</label>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Pirmyn</button>
    </div>

</form>';
}
?>


</body>
</html>