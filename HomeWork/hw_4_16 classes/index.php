<?php

require_once 'boot.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 04 16 (PHP classes)</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>

<form action="action.php" method="post">
    <input type="text" name="msgLine">
    <input type="submit" value="Press me" name="btnPress">
</form>

<form action="showAction.php" method="post">
    <div style="margin-left: 200px">
        <input type="submit" value="ShowAll" id="btnShow">        
    </div>
</form>

<script src="js/js1.js"></script>
</body>
</html>