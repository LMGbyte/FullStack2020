<?php

session_start();

define('ROOT_PATH', dirname(__FILE__));

$env_path = ROOT_PATH . '/.env';

if (file_exists($env_path)) {
define('_ENV', parse_ini_file($env_path));
} else {
echo '".env" not found';

exit;
}

unset($env_path);

require ROOT_PATH . '/functions.php';

error_reporting(E_ALL);

if (env('DEBUG', FALSE)) {
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
} else {
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

ini_set('log_errors', 1);
ini_set('error_log', ROOT_PATH . '/logs/php-error.log');
}