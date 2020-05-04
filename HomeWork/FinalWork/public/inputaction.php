<?php
require_once 'boot.php';

$dsns = sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE'));
$db = new PDO($dsns, env('DB_USERNAME'), env('DB_PASSWORD'));

if ($_SESSION['counter'] == 1) {
    if (is_numeric($_SESSION['period']) && is_numeric($_SESSION['utilityid']) && is_numeric($_POST['from']) && is_numeric($_POST['to']) && is_numeric($_POST['price'])) {

        $query = 'INSERT INTO `data` (period, util_id, d_from, d_to, qty, price, d_sum) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $db->prepare($query);

        $ifrom = floatval($_POST['from']);
        $ito = floatval($_POST['to']);
        $iprice = floatval($_POST['price']);

        if ($ifrom < $ito) {
            $sum = ($ito - $ifrom) * $iprice;
            $qty = ($ito - $ifrom);
        } else {
            $sum = 0;
        }

        if ($stmt->execute([
            $_SESSION['period'],
            $_SESSION['utilityid'],
            $_POST['from'],
            $_POST['to'],
            $qty,
            $_POST['price'],
            $sum
        ])) {
            $success = true;
            $result = 'Duomenys išsaugoti';
        } else {
            $success = false;
            $result = 'Kažkas ne taip.';
        };

        if ($success == true) {
            $query = 'SELECT * FROM lastcounters WHERE util_id = ?';
            $stmt = $db->prepare($query);
            if ($stmt->execute([$_SESSION['utilityid']])) {
                $lasts = $stmt->fetchAll(PDO::FETCH_OBJ);
                if (sizeof($lasts) > 0) {
                    $query = 'UPDATE lastcounters SET lastvalue=? WHERE util_id=?;';
                    $stmt = $db->prepare($query);
                    if ($stmt->execute([$_POST['to'], $_SESSION['utilityid']])) {
                        $result = 'Duomenys išsaugoti';
                    }
                } else {
                    $query = 'INSERT INTO lastcounters (util_id, lastvalue) VALUES (?,?)';
                    $stmt = $db->prepare($query);
                    if ($stmt->execute([$_SESSION['utilityid'], $_POST['to']])) {
                        $result = 'Duomenys išsaugoti';
                    }
                }
            }
        }
        if ($success == true) {
            $query = 'UPDATE utilities SET price=? WHERE id=?;';
            $stmt = $db->prepare($query);

            if ($stmt->execute([$_POST['price'], $_SESSION['utilityid']])) {
                $result = 'Duomenys išsaugoti';
            }
        }
    }
} else {
    if (is_numeric($_SESSION['period']) && is_numeric($_SESSION['utilityid']) && is_numeric($_POST['sum'])) {

        $query = 'INSERT INTO `data` (period, util_id, price, d_sum) VALUES (:period, :util_id, :price, :d_sum)';
        $stmt = $db->prepare($query);
        $sum = $_POST['sum'];
        $stmt->bindParam(':period', $_SESSION['period']);
        $stmt->bindParam(':util_id', $_SESSION['utilityid']);
        $stmt->bindParam(':price', $_POST['price']);
        $stmt->bindParam(':d_sum', $_POST['sum']);

        if ($stmt->execute()) {
            $result = 'Duomenys išsaugoti';
            $query = 'UPDATE utilities SET price=? WHERE id=?;';
            $stmt = $db->prepare($query);

            if ($stmt->execute([$sum, $_SESSION['utilityid']])) {
                $result = 'Duomenys išsaugoti';
            } else {
                $result = 'Kažkas ne taip.';
            };
        } else {
            $result = 'Kažkas ne taip.';
        };

    } else {
        $result = 'Kažkas ne taip.';
    }

}
if (!isset($result)) {
    $result = 'Kažkas ne taip';
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
          integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Import</title>
</head>
<body>
<div class="text-center mt-5 mx-5">
    <h2 class="titles">Duomenų įvedimas...</h2>
    <hr>
</div>

<div class="text-center mx-5">
    <?php echo $result ?>

</div>
<div class="text-right mt-3 mx-5">
    <hr>
    <a class="btn btn-outline-primary btn-lg" href="input.php" role="button">Grįžti...</a>
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