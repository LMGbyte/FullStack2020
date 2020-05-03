<?php

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

<div class="card m-3 text-center">
    <h5 class="card-header">Darbuotojai</h5>
    <div class="card-body">
        <form action="output.php" method="post">
            <div class="row">
                <div class="col-sm-4"></div>
            <div class="form-group col-sm-4">
                <label for="salaryInput">Įveskite atlyginimą...</label>
                <input type="number" step=0.01 class="form-control" id="salaryInput" name="salaryInput">
            </div>
                <div class="col-sm-4"></div>
            </div>
            <button type="submit" class="btn btn-primary">Pateikti sąrašą</button>
        </form>
    </div>
    <hr>
    <div class="card-body">
        <form action="input.php">
            <button type="submit" class="btn btn-primary">Įveskite naują darbuotoją</button>
        </form>
    </div>
</div>

</body>
</html>