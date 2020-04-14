<?php

session_start();

if (!isset($_SESSION['pass'])) {
    $_SESSION['pass'] = false;
}