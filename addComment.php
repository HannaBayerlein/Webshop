<?php

require_once('database.inc.php');

require_once("mysql_connect_data.inc.php");



$db = new Database($host, $userName, $password, $database);

$db->openConnection();


if (!$db->isConnected()) {

header("Location: cannotConnect.html");

exit();

}

$name = $_REQUEST['name'];
$comment = $_REQUEST['comment'];

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
