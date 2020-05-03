<?php
require_once 'boot.php';
$dsns = sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE'));
$db = new PDO($dsns, env('DB_USERNAME'), env('DB_PASSWORD'));
$result = '';
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
    <title>Utilities</title>
</head>
<body>
<div class="text-center mt-5 mx-5">
    <h2 class="titles">Ataskaitos generavimas</h2>
    <hr>
</div>

<?php if (isset($_POST['year'])) {
    $_SESSION['year'] = $_POST['year'];
} ?>
<?php if (isset($_POST['month'])) {
    $_SESSION['monthn'] = $_POST['month'];
    $_SESSION['month'] = monthLT($_POST['month']);
} ?>

<?php if (!isset($_POST['year'], $_POST['month'])): ?>

    <div class="text-center mt-3 mx-5">
        <form class="form-inline" action="" method="post">
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
            <button type="submit" class="btn btn-outline-primary">Generuoti</button>
        </form>
    </div>
<?php endif; ?>
<?php if (isset($_POST['year'], $_POST['month'])):

    $query = 'SELECT 
    `utilities`.`util_name`AS `utility`,
	`data`.`d_from`, 
	`data`.`d_to`,
	`data`.`qty`,
	`data`.`price`,
	`data`.`d_sum`
    FROM `data`
    JOIN `utilities` ON `utilities`.`id` = `data`.`util_id`
    WHERE `data`.`period`=?';

    $stmt = $db->prepare($query);



    if (is_numeric($_SESSION['monthn'])) {
        if ($_SESSION['monthn'] < 10) {
            $_SESSION['period'] = $_SESSION['year'] . '0' . $_SESSION['monthn'];
        } else {
            $_SESSION['period'] = $_SESSION['year'] . $_SESSION['monthn'];
        }
    }

    if ($stmt->execute([$_SESSION['period']])) {
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        $result = 'Brake this point';
//        dd($data, $_SESSION['period']);
        $sumum = 0;
    } else {
        $result = 'Not ok';
    }
    ?>

<?php endif; ?>

<?php if (isset($data)): ?>

<div class="mx-5">
    <?php echo '<h5>'.$_SESSION['year'].' '.$_SESSION['month'].'</h5>'?>
</div>

<div class="mx-5">
    <table class="table table-striped">
        <thead>
        <tr class="thead-dark">
            <th scope="col">Mokestis</th>
            <th scope="col">Nuo..</th>
            <th scope="col">Iki..</th>
            <th scope="col">Kiekis</th>
            <th scope="col">Kaina</th>
            <th scope="col">Suma</th>
        </tr>
        </thead>
        <tbody>
    <?php foreach ($data as $datum):
        echo '<tr scope="row">' . "\n";
        echo '<td>' . returnok($datum->utility) . "</td>\n";
        echo '<td>' . returnok($datum->d_from) . "</td>\n";
        echo '<td>' . returnok($datum->d_to) . "</td>\n";
        echo '<td>' . returnok($datum->qty) . "</td>\n";
        echo '<td>' . returnok($datum->price) . "</td>\n";
        echo '<td>' . returnok($datum->d_sum) . "</td>\n";
        echo '</tr>';
        $sumum += floatval($datum->d_sum);
     endforeach; ?>
    <tr scope="row">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><strong>Bendra suma:</strong></td>
        <td><strong><?php echo $sumum?></strong></td>
    </tr>
    </tbody>
    </table>
<?php endif;?>
</div>
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