<?php

require_once('database.inc.php');

require_once("mysql_connect_data.inc.php");

$db = new Database($host, $userName, $password, $database);

$db->openConnection();

session_start();

$username = $_SESSION['username'];

$db->resetSession($username);

$db->closeConnection();

header("Location: startpage.php");

exit();

?>
