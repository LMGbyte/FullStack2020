<?php
require 'con_vars.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 04 23 (Data base)</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>
<?php

try {
    $con = new PDO(MYDB, USER, PASSWORD);

//    mydb - tai kintamasis, kuris nustatytas php.ini faile:
//    pdo.dsn.mydb="mysql:dbname=fullstack;host=localhost:3308"

} catch
(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
if ($_POST['salaryInput'] == '') {
    $_POST['salaryInput'] = 0;
}
//$sql = 'SELECT name, surname, salary, position FROM employees WHERE salary >= ' . $_POST['salaryInput'] . ' ORDER BY salary DESC';
$sql = 'SELECT 
	`employees`.`name`, 
	`employees`.`surname`,
	`employees`.`salary`,
	`positions`.`name` AS \'position\'
FROM `employees`
JOIN `positions` ON `positions`.`id` = `employees`.`position_id`';
?>

<?php
include 'salarytable.php';
?>
<div class="text-center">
    <form action="index.php">
        <button type="submit" class="btn btn-success">Atgal</button>
    </form>
</div>
</body>

