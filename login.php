<?php

require_once('database.inc.php');

require_once("mysql_connect_data.inc.php");



$db = new Database($host, $userName, $password, $database);

$db->openConnection();


if (!$db->isConnected()) {

header("Location: cannotConnect.html");

exit();

}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if (!$db->userExists($username)) {

$db->closeConnection();

header("Location: createuser.php");

exit();

}
$db->closeConnection();

session_start();

$_SESSION['db'] = $db;

$_SESSION['username'] = $username;

header("Location: next.php");

?>
