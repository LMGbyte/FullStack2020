<?php

session_start();

define('SESSION_KEY', 'results');

if (!isset($_SESSION[SESSION_KEY])) {
    $_SESSION[SESSION_KEY] = array();
}