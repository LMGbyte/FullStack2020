<?php

if (function_exists('env') == FALSE) {
	function env($name, $default = FALSE) {
		if (isset(_ENV[$name])) {
			return _ENV[$name];
		}

		return $default;
	}
} else {
	echo '"env" function exists';

	exit;
}

if (function_exists('dd') == FALSE) {
	function dd() {
		array_map(function ($x) {
			var_dump($x);
		}, func_get_args());
		
		die(1);
	}
}

if (function_exists('show') == FALSE) {
	function show($value = '') {
		echo htmlspecialchars($value);
	}
}

if (function_exists('showSelected') == FALSE) {
	function showSelected($key, $value) {
		if (isset($_GET[$key]) && $_GET[$key] == $value) {
			echo ' selected="selected"';
		}

		echo '';
	}
}

if (function_exists('goBackWithError') == FALSE) {
	function goBackWithError($message) {
		$_SESSION['notice'] = $message;

		header('Location: ' . $_SERVER['HTTP_REFERER']);

		exit;
	}
}

if (function_exists('getPrevVal') == FALSE) {
	function getPrevVal($name) {
		// return isset($_SESSION[$name]) ? $_SESSION[$name] : '';
		return $_SESSION['previous_request'][$name] ?? '';
	}
}