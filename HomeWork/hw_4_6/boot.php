<?php

session_start();

if (!isset($_SESSION['results'])) {
    $_SESSION['results'] = array();
}