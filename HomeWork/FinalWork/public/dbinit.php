<?php

$dsn = sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE'));

$dbh = new PDO($dsn, env('DB_USERNAME'), env('DB_PASSWORD'));

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');

?>