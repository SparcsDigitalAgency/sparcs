<<<<<<< HEAD
<?php

$path = isset($_POST['value']) ? $_POST['value'] : '';
$http = isset($_POST['value']) ? $_POST['value'] : '';
$index = isset($_POST['value']) ? $_POST['value'] : '';
$about = isset($_POST['value']) ? $_POST['value'] : '';
$contact_me = isset($_POST['value']) ? $_POST['value'] : '';
$contact = isset($_POST['value']) ? $_POST['value'] : '';
$portfolio = isset($_POST['value']) ? $_POST['value'] : '';
$services = isset($_POST['value']) ? $_POST['value'] : '';
$text9 = isset($_POST['value']) ? $_POST['value'] : '';
$buyercentric = isset($_POST['value']) ? $_POST['value'] : '';
$angels_group = isset($_POST['value']) ? $_POST['value'] : '';
$a4add = isset($_POST['value']) ? $_POST['value'] : '';
$shalom = isset($_POST['value']) ? $_POST['value'] : '';
$leadpile = isset($_POST['value']) ? $_POST['value'] : '';
$samaritan_heart = isset($_POST['value']) ? $_POST['value'] : '';
$genx_automation = isset($_POST['value']) ? $_POST['value'] : '';
$st_johns = isset($_POST['value']) ? $_POST['value'] : '';
$sophia_books = isset($_POST['value']) ? $_POST['value'] : '';
$brook_dale = isset($_POST['value']) ? $_POST['value'] : '';
$svd_world = isset($_POST['value']) ? $_POST['value'] : '';
$usasecureloans = isset($_POST['value']) ? $_POST['value'] : '';
$loansonclick = isset($_POST['value']) ? $_POST['value'] : '';
$pravasakirali = isset($_POST['value']) ? $_POST['value'] : '';
$digital_marketing = isset($_POST['value']) ? $_POST['value'] : '';
$site = isset($_POST['value']) ? $_POST['value'] : '';
	
	$path = ($path) ?: './';
	//$http = ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != 'off')) ? 'https' : 'http';
	$index = ($index) ? $index : (($path == './') && preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']));
	$about =  (preg_match("/about.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact =  (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact_me =  (preg_match("/contact_me.php/",$_SERVER['SCRIPT_FILENAME']));
	$portfolio = (preg_match("/portfolio.php/", $_SERVER['SCRIPT_FILENAME']));
	$services = (preg_match("/services.php/", $_SERVER['SCRIPT_FILENAME']));
	$text9 = (preg_match("/text9.php/", $_SERVER['SCRIPT_FILENAME']));
	$buyercentric = (preg_match("/buyercentric.php/", $_SERVER['SCRIPT_FILENAME']));
	$angels_group = (preg_match("/angels_group.php/", $_SERVER['SCRIPT_FILENAME']));
	$a4add = (preg_match("/a4add.php/", $_SERVER['SCRIPT_FILENAME']));
	$shalom = (preg_match("/shalom.php/", $_SERVER['SCRIPT_FILENAME']));
	$leadpile = (preg_match("/leadpile.php/", $_SERVER['SCRIPT_FILENAME']));
	$samaritan_heart = (preg_match("/samaritan_heart.php/", $_SERVER['SCRIPT_FILENAME']));
	$genx_automation = (preg_match("/genx_automation.php/", $_SERVER['SCRIPT_FILENAME']));
	$st_johns = (preg_match("/st_johns.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$sophia_books = (preg_match("/sophia_books.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$brook_dale = (preg_match("/brook_dale.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$svd_world = (preg_match("/svd_world.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$usasecureloans = (preg_match("/usasecureloans.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$loansonclick = (preg_match("/loansonclick.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$pravasakirali = (preg_match("/pravasakirali.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$digital_marketing =(preg_match("/digital-marketing-course.php/", $_SERVER['SCRIPT_FILENAME'])); 
	$site = (preg_match("/localhost/",$_SERVER['HTTP_HOST'])) ? 'http://localhost/~thomasaugusti/sparcsdigital.com/' : 'http://www.sparcsdigital.com';
=======
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
	$contact =  (preg_match("/contact-us.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact_me =  (preg_match("/contact_me.php/",$_SERVER['SCRIPT_FILENAME']));
	$works = (preg_match("/works.php/", $_SERVER['SCRIPT_FILENAME']));
	$services = (preg_match("/services.php/", $_SERVER['SCRIPT_FILENAME']));
 
	$site = (preg_match("/localhost/",$_SERVER['HTTP_HOST'])) ? 'http://localhost/~thomasaugusti/git/sparcs/sparcs-new/' : 'http://www.sparcsdigital.com';
>>>>>>> b96059b691bd8e95c258380d75b70abd8cc2602c
?>