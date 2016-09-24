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

if (!$db->correctUser($username, $password)) {

$db->closeConnection();

header("Location: createuser.php");

exit();

}
#else if(!$db->passwordCorrect($username, $password)){
#  $message = "wrong answer";
# echo "<script type='text/javascript'>alert('$message');</script>";
#}

$db->closeConnection();

session_start();

$_SESSION['db'] = $db;

$_SESSION['username'] = $username;

header("Location: next.php");

?>
