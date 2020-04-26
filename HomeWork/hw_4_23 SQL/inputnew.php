<?php
require 'con_vars.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Įkėlimas</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>
<?php
$con = new PDO('mydb', USER, PASSWORD);

//die(var_dump($_POST['nameIn'] ,$_POST['surnameIn'] , $_POST['positionIn'],$_POST['salaryIn']));

$stmt = $con->prepare('INSERT INTO employees (name, surname, position, salary) VALUES (:name,:surname,:position ,:salary)');
$stmt->bindParam(':name', $name);
$stmt->bindParam(':surname', $surname);
$stmt->bindParam(':position', $position);
$stmt->bindParam(':salary', $salary);

// insert one row
$name = $_POST['nameIn'];
$surname = $_POST['surnameIn'];
$position = $_POST['positionIn'];
$salary = $_POST['salaryIn'];

if ($_POST['nameIn']==''||$_POST['surnameIn']==''||$_POST['positionIn']==''||$_POST['salaryIn']=='')
{
    ?>
    <div class="alert alert-danger" role="alert">
        Visi laukai būtini!
    </div>
    <?php
} else {
    ?>
    <div class="alert alert-success" role="alert">
        Duomenys įkelti
    </div>
<?php
    $stmt->execute();
}

// Čia bandžiau su query, bet nepavyko:

//$sqlin = 'INSERT INTO employees (name, surname, position, salary) VALUES ('. $_POST['nameIn'] . ','.$_POST['surnameIn'] . ',' . $_POST['positionIn']
//. ',' . $_POST['salaryIn'] . ')';

//if ($con->query($sqlin) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sqlin . "<br>" . $con->errorInfo();
//}

?>
<div class="text-center">
    <form action="index.php">
        <button type="submit" class="btn btn-success">Atgal</button>
    </form>
</div>
</body>