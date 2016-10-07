<?php

require_once('database.inc.php');

require_once("mysql_connect_data.inc.php");



$db = new Database($host, $userName, $password, $database);

$db->openConnection();


if (!$db->isConnected()) {

header("Location: cannotConnect.html");

exit();

}
$username = $_SESSION['username'];
if($_POST['CSRFToken'] != sha1($username + getLoginCookie($username))
	header("Location: cannotConnect.html");
$name = $_POST['name'];
$comment = $_POST['comment'];

print $name;
print $comment;

if($name != null && $comment != null ){

  $db->addComment($name, $comment);
header("Location: comments.php");
  exit();



$db->closeConnection();

session_start();

$_SESSION['db'] = $db;

$_SESSION['username'] = $username;

$_SESSION['name'] = $name;

$_SESSION['comment'] = $comment;

}
header("Location: comments.php");

?>
