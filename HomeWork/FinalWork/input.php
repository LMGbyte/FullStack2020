<?php
require_once 'boot.php';

$dsns = sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE'));
$db = new PDO($dsns, env('DB_USERNAME'), env('DB_PASSWORD'));
$query = 'SELECT * FROM `utilities` ORDER BY `util_name` ASC';
$stmt = $db->prepare($query);
$stmt->execute();
$utilities = $stmt->fetchAll(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
          integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Nauja įmoka</title>
</head>
<body>
<div class="text-center mt-5 mx-5">
    <h2 class="titles">Nauja įmoka</h2>
    <hr>
</div>

<!--    selecting input tax     -->
<?php if (!isset($_POST['year'], $_POST['month'], $_POST['utility'])): ?>
    <?php if (isset($_POST['year'])) {
        $_SESSION['year'] = $_POST['year'];
    } ?>
    <?php if (isset($_POST['month'])) {
        $_SESSION['monthn'] = $_POST['month'];
        $_SESSION['month'] = monthLT($_POST['month']);
    } ?>
    <div class="text-center mt-3 mx-5">
        <form class="form-group form-inline" action="input.php" method="post">
            <select class="form-control w-25 mr-2" name="year" id="periodY">
                <option value="<?php echo $_SESSION['year'] ?>"
                        selected="selected"><?php echo $_SESSION['year'] . " m" ?></option>
                <?php for ($n = 2015; $n <= date("Y"); $n++): ?>
                    <option value="<?php echo $n ?>"><?php echo $n . " m" ?></option>
                <?php endfor; ?>
            </select>

            <select class="form-control mr-2" name="month" id="periodM">
                <option value="<?php echo $_SESSION['monthn']; ?>"
                        selected="selected"><?php echo $_SESSION['month'] ?></option>
                <?php for ($n = 1; $n <= 12; $n++): ?>
                    <option value="<?php echo $n ?>"><?php echo monthLT($n) ?></option>
                <?php endfor; ?>
            </select>

            <select class="form-control mr-2" style="width: 400px" name="utility" id="utility">
                <option value="" disabled="disabled" selected="selected">Pasirinkite mokestį...</option>
                <?php foreach ($utilities as $utility): ?>
                    <option value="<?php show($utility->id); ?>"><?php show($utility->util_name); ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-outline-primary">Pildyti...</button>
        </form>
    </div>
<?php endif; ?>


<!--    input fields    -->
<?php if (isset($_POST['year'], $_POST['month'], $_POST['utility'])):

    $_SESSION['year'] = $_POST['year'];
    $_SESSION['monthn'] = $_POST['month'];
    $_SESSION['month'] = monthLT($_SESSION['monthn']);

    require 'checkin.php';

    $stmt = $db->prepare('SELECT * FROM `utilities` WHERE `id`=:utilid');
    $stmt->bindParam(':utilid', $_POST['utility']);
    $stmt->execute();
    $utility = $stmt->fetchAll(PDO::FETCH_OBJ);


    $stmt2 = $db->prepare('SELECT * FROM `lastcounters` WHERE `util_id`=:utilid');
    $stmt2->bindParam(':utilid', $_POST['utility']);
    $stmt2->execute();
    $lastcounter = $stmt2->fetchAll(PDO::FETCH_OBJ);

    foreach ($utility as $value) {
        $utilityName = $value->util_name;
        $utilityPrice = $value->price;
        $utilityId = $value->id;
        $_SESSION['counter'] = $value->counter;
    }

    foreach ($lastcounter as $value) {
        $last = $value->lastvalue;
    }

    $_SESSION['utilityid'] = $utilityId;

    ?>
    <?php if (isset($_SESSION['notice'])): ?>
    <div class="alert alert-danger mx-5" role="alert">
        <?php echo $_SESSION['notice']; ?>
    </div>
    <?php unset($_SESSION['notice']);endif; ?>
    <div class="text-left mt-3 mx-5">
        <form class="form-group" action="inputaction.php" method="post">
            <h5><?php echo returnok($_POST['year']) . ' ' . returnok($_SESSION['month']) . "</h5> <h6>" . returnok($utilityName) . ':'; ?></h5>
            <?php if ($_SESSION['counter'] == '1'): ?>
                <label for="from">Nuo:</label>
                <input class="form-control" type="number" step="0.01" id="from" value="<?php show($last) ?>"
                       name="from">
                <label for="to">Iki:</label>
                <input class="form-control" type="number" step="0.01" id="to" name="to">
                <label for="price">Kaina:</label>
                <input class="form-control" type="number" step="0.0001" id="price"
                       value="<?php show($utilityPrice) ?>"
                       name="price">

            <?php else: ?>
                <label for="sum">Suma:</label>
                <input class="form-control" type="number" step="0.01" id="sum" value="<?php show($utilityPrice) ?>"
                       name="sum">
            <?php endif; ?>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-primary mt-3">Įvesti</button>
            </div>

        </form>
    </div>
<?php endif; ?>

<div class="text-right mt-3 mx-5">
    <hr>
    <a class="btn btn-outline-primary btn-lg" href="index.php" role="button">Į pradžią</a>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
        integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
        crossorigin="anonymous"></script>
</body>
</html>