<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 04 02 PHP comments</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>
<!--Group No 1-->
<form class="m-3" method="post" action="actions.php">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label text-right">Your
            name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label text-right">Your
            e.mail</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label text-right">Your
            message</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="exampleFormControlTextarea1"
                      rows="3" name="message"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<hr>
<!--<div class="card row"></div>-->
<?php
$data = file_get_contents('comments.txt');
$data = json_decode($data);
if (!is_null($data)) {
foreach ($data as $fetch):
?>
<div class="m-2">
    <div class="m-2">
        <div class="row">
            <div class="col-sm-2">
                <img src="img/avatar.png"
                     class="img-thumbnail align-right"
                     style="max-height: 60px; float: right;"/>
            </div>
            <div class="col-sm-10">
                <span class="text-danger font-weight-bold"><?php echo $fetch->name ?></span>
                <br>
                <?php echo $fetch->time ?>
                <br>
                <?php echo $fetch->message ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php
endforeach;
}
?>
</body>
</html>