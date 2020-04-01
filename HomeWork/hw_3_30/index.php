<?php
include 'functions_3_30.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 03 30 PHP</title>
</head>
<body>
<div>
    <?php
    echo pyramid().'<hr>';
    ?>
</div>
<div>
    <?php
    echo convert('mini_pop_ula_kamarok').'<hr>';
    ?>
</div>
<div>
    <?php
    $date = '2020.01.15';
    echo $date.' yra '.zodiac($date).'<hr>';
    ?>
</div>
</body>
</html>