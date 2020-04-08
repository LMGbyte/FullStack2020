<?php
require_once 'boot.php';
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 04 06 (PHP sessions)</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>

<div class="card mx-3 my-1" id="gr-1">
    <div class="card-header text-center">
        Kalkuliatorius
    </div>
    <div class="card-body text-center">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <div class="form-group">
                <p>Matematinė išraiška</p>
                <input type="text" class="form-control"
                       name="expression"
                       placeholder="1+5">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Skaičiuoti</button>
        </form>
    </div>
</div>

<div class="card mx-3 my-1" id="gr-1">
    <div class="card-header text-center">
        Rezultatai:<br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <button type="submit" class="btn btn-danger mb-2" name="clear_d">Išvalyti duomenis</button>
        </form>
    </div>
    <div class="card-body text-center">
        <?php
        if (isset($_GET['clear_d'])) {
            clear_data();
        }
        if (isset($_GET['expression'])) {
            calculate($_GET['expression']);
            unset($GLOBALS['$_GET[\'expression\']']);
        }
        foreach ($_SESSION['results'] as $res) {
            echo '<h3>' . $res . '</h3>';
        }
        ?>
    </div>
</div>

</body>
</html>