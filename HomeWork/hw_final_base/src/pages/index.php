<?php

$query = 'SELECT 
	`employees`.`id`, 
	`employees`.`name`, 
	`employees`.`surname`,
	`employees`.`salary`,
	`positions`.`name` AS \'position\'
FROM `employees`
JOIN `positions` ON `positions`.`id` = `employees`.`position_id`';

if (isset($_GET['salary']) || isset($_GET['position'])) {
	$query .= ' WHERE';

	if (isset($_GET['salary'])) {
		$query .= ' `employees`.`salary` >= :salary';
	}

	if (isset($_GET['salary'], $_GET['position'])) {
		$query .= ' AND';
	}

	if (isset($_GET['position'])) {
		$query .= ' `positions`.`id` = :position';
	}
}

$query .= ' ORDER BY `employees`.`id` DESC';

$stmt = $dbh->prepare($query);

if (isset($_GET['salary'])) {
	$stmt->bindParam(':salary', $_GET['salary'], PDO::PARAM_INT);
}

if (isset($_GET['position'])) {
	$stmt->bindParam(':position', $_GET['position'], PDO::PARAM_INT);
}

$stmt->execute();

$employees = $stmt->fetchAll(PDO::FETCH_OBJ);

$query = 'SELECT * FROM `positions`';

$stmt = $dbh->prepare($query);

$stmt->execute();

$positions = $stmt->fetchAll(PDO::FETCH_OBJ);

require ROOT_PATH . '/views/index.php';

unset($_SESSION['previous_request']);
