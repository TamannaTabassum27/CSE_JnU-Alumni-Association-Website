<?php  require_once "db-config.php";

session_start();
//$user->logout();
		// unset($_SESSION['username']);
		// unset($_SESSION['memberID']);
		// unset($_SESSION['loggedin']);
$_SESSION  = array();
		session_destroy(); 

//logged in return to index page
header('location: index.php');
exit;
?>