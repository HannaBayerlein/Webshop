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
$hash = password_hash($password, PASSWORD_BCRYPT);
$address = $_REQUEST['address'];

if($password == null || $username == null || $address == null){
  $db->closeConnection();

  header("Location: wrongCreateUserPage.html");

  exit();

}

  if (!$db->createUser($username, $hash, $address)) {

    $db->closeConnection();

    header("Location: wrongCreateUserPage.html");

    exit();
}
$db->closeConnection();

session_start();

$_SESSION['db'] = $db;

$_SESSION['username'] = $username;

header("Location: newUserStartPage.php");




?>
