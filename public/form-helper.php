<?php

function valid_length($field, $min, $max) {
	$trimmed = trim($field);
	return (strlen($trimmed) >= $min && strlen($trimmed) <= $max);
}

function a_name($name) {
	$trimmed = trim($name);
	if ($name{0} == 'A' || $name {0} == 'a') {
		return true;
	}
	return false;
}

function redirectError($location, $errors, $presets = NULL) {
	$_SESSION['errors'] = $errors;
	if ($presets) {
		$_SESSION['presets'] = $presets;
	}
	header("Location: $location");
	die;
}

?>