<?php

$dsn = sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE'));

$dbh = new PDO($dsn, env('DB_USERNAME'), env('DB_PASSWORD'));

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');

$page = isset($_GET['page']) ? $_GET['page'] : FALSE;

switch ($page) {
	case 'about' :
		require ROOT_PATH . '/src/pages/about.php';
		break;

	case 'add':
		require ROOT_PATH . '/src/pages/add.php';
		break;

	default:
		require ROOT_PATH . '/src/pages/index.php';
		break;


	// default:
	//     http_response_code(404);
	//     require __DIR__ . '/views/404.php';
	//     break;
}