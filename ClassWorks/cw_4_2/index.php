<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 03 26 (PHP)</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="css/modalCSS.css">-->
</head>
<body>

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header text-center">Kalkuliatorius</p>
    <div class="card-body text-center">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET" >
            <div class="form-group">
                <p>Matematine israiska</p>
                <input type="text" class="form-control"
                       name="expression"
                       placeholder="1+5">
            </div>
<!--            <div class="form-group">-->
<!--                <label for="exampleFormControlSelect1">Example select</label>-->
<!--                <select class="form-control" id="exampleFormControlSelect1">-->
<!--                    <option>1</option>-->
<!--                    <option>2</option>-->
<!--                    <option>3</option>-->
<!--                    <option>4</option>-->
<!--                    <option>5</option>-->
<!--                </select>-->
<!--            </div>-->
            <button type="submit" class="btn btn-primary mb-2">Skaičiuoti</button>
        </form>
    </div>
</div>

<div class="card mx-3 my-1" id="gr-1">
    <p class="card-header text-center">Rezultatas</p>
    <div class="card-body text-center">
        <?php
        if(isset($_GET['expression'])) {
            echo '<h3>'.calculate($_GET['expression']).'</h3>';
        }
        ?>
    </div>
</div>

</body>
</html>