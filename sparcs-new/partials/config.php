<?php

$path = isset($_POST['value']) ? $_POST['value'] : '';
$http = isset($_POST['value']) ? $_POST['value'] : '';
$index = isset($_POST['value']) ? $_POST['value'] : '';
$about = isset($_POST['value']) ? $_POST['value'] : '';
$contact_me = isset($_POST['value']) ? $_POST['value'] : '';
$contact = isset($_POST['value']) ? $_POST['value'] : '';
$works = isset($_POST['value']) ? $_POST['value'] : '';
$services = isset($_POST['value']) ? $_POST['value'] : '';

$site = isset($_POST['value']) ? $_POST['value'] : '';
	
	$path = ($path) ?: './';
	//$http = ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != 'off')) ? 'https' : 'http';
	$index = ($index) ? $index : (($path == './') && preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']));
	$company =  (preg_match("/company.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact =  (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact_me =  (preg_match("/contact_me.php/",$_SERVER['SCRIPT_FILENAME']));
	$works = (preg_match("/works.php/", $_SERVER['SCRIPT_FILENAME']));
	$services = (preg_match("/services.php/", $_SERVER['SCRIPT_FILENAME']));
 
	$site = (preg_match("/localhost/",$_SERVER['HTTP_HOST'])) ? 'http://localhost/~thomasaugusti/git/sparcs/sparcs-new/' : 'http://www.sparcsdigital.com';
?>