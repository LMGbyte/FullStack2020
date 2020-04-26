<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Naujas darbuotojas</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>

<div class="card m-3 text-center">
    <h5 class="card-header">Naujas darbuotojas</h5>
    <div class="card-body">
        <form action="inputnew.php" method="post">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="form-group col-lg-8 text-left">
                    <label for="nameIn">Vardas</label>
                    <input type="text" class="form-control" id="nameIn">
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2"></div>
                <div class="form-group col-lg-8 text-left">
                    <label for="surnameIn">Pavardė</label>
                    <input type="text" class="form-control" id="surnameIn">
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2"></div>
                <div class="form-group col-lg-8 text-left">
                    <label for="positionIn">Pareigos</label>
                    <input type="text" class="form-control" id="positionIn">
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2"></div>
                <div class="form-group col-lg-8 text-left">
                    <label for="salaryIn">Atlyginimas</label>
                    <input type="number" class="form-control" id="salaryIn">
                </div>
                <div class="col-lg-2"></div>

            </div>
            <button type="submit" class="btn btn-primary">Įvesti</button>
        </form>
    </div>
</div>
<div class="m-3 text-center">
    <form action="index.php">
        <button type="submit" class="btn btn-success">Atgal</button>
    </form>
</div>

</body>
</html>