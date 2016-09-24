<?php

require_once('database.inc.php');

	$item = $_REQUEST['item'];

	session_start();
	$db = $_SESSION['db'];
	$username = $_SESSION['username'];
	$_SESSION['item']= $item;


header("Location: cart.php");

?>
