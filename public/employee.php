<?php
class Employee {
	$private firstname;
	$private lastname;

	function set_firstname($firstname) {
		$this->firstname = $firstname;
	}

	function get_firstname() {
		return $this->firstname;
	}
	function set_lastname($lastname) {
		$this->lastname = $lastname;
	}

	function get_lastname() {
		return $this->lastname;
	}
}