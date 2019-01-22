<?php
require_once('form-helper.php');
session_start();
$efirstname = trim($_POST['efirstname']);
$elastname = trim($_POST['elastname']);
$numberdependents = trim($_POST['numberdependents']);
$aname = trim($_POST['aname']);
$errors = array();
unset($_SESSION['errors']);
unset($_SESSION['presets']);

if (!valid_length($efirstname, 1, 50)) {
	$errors['efirstname'] = "First name is required. Must be less than 50 characters.";	
}

if (!valid_length($elastname, 1, 50)) {
	$errors['elastname'] = "Last name is required. Must be less than 50 characters.";	
}

if (!is_numeric($numberdependents) || !valid_length($numberdependents, 1, 50)) {
	$errors['numberdependents'] = "Number of dependents must be a number.";
}

if (!is_numeric($aname) || !valid_length($aname, 1, 50)) {
	$errors['aname'] = "Must be a number.";
}

if (empty($errors)) {
	$summary = $efirstname . " " . $elastname . " = ";
	$max = 52000;
	$cost;
	$total;
	if (a_name($efirstname)) {
		$total = "$900";
		$cost = 900;
	} else {
		$total = "$1000";
		$cost = 1000;	
	}
	$summary .= $total . "<br>";
	$summary .= "Dependent(s) cost = $";
	//$summary .= "Total dependent discount = " . $aname . "<br>";  
	$numofdep = (int)$numberdependents;
	if ($numofdep > 0) {
		$dependentscost = $numofdep * 500;
		$summary .= $dependentscost . "<br>";
		$numofdis = (int)$aname;
		$totaldiscount = 0;
		if ($numofdis > 0) {
			$totaldiscount = 50 * $numofdis;
		}
		$cost += $dependentscost - $totaldiscount;
		$summary .= "Discount = -$" . $totaldiscount . "<br>";
	} else {
		$summary .= "$0";
	}
	$summary .= "total = $";
	if ($cost > $max) {
		echo "Something isn't right. The total deduction is more than the employees yearly paycheck. Which is a total deduction of $". $cost . ".";
	} else {
		echo $summary;
		print($cost);
	}

} else {
	$presets = array('efirstname' => htmlspecialchars($efirstname), 
					 'elastname' => htmlspecialchars($elastname),
					 'numberdependents' => htmlspecialchars($numberdependents),
					 'aname' => htmlspecialchars($aname));
	redirectError("index.php", $errors, $presets);
}

?>