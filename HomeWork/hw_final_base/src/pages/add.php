<?php

if (!isset($_SERVER['HTTP_REFERER'])) {
	echo 'Direct request not allowed';

	exit;
}

$_SESSION['previous_request'] = $_POST;

if (! isset(
	$_POST['name'],
	$_POST['surname'],
	$_POST['salary'],
	$_POST['position'])
) {
	goBackWithError('Not all field properly filled');
}

// https://phpdelusions.net/pdo_examples/insert

$query = 'INSERT INTO `employees` (name, surname, salary, position_id) VALUES (:name, :surname, :salary, :position_id);';


$stmt = $dbh->prepare($query);

$stmt->execute([
	'name' => $_POST['name'],
	'surname' => $_POST['surname'],
	'salary' => $_POST['salary'],
	'position_id' => $_POST['position']
]);

header('Location: ' . $_SERVER['HTTP_REFERER']);

exit;