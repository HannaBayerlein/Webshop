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

if(!$db->blockedPassword($username)){

      if (!$db->correctUser($username, $password)) {
      $db->increaseCount($username);

      $db->closeConnection();

      header("Location: wrongUserStartPage.php");

      exit();

    }else{
          $db->resetCounter($username);

          $db->closeConnection();

          session_start();

          $_SESSION['db'] = $db;

          $_SESSION['username'] = $username;

	  $_SESSION['login_cookie'] = sha1($username + $password + time());

          header("Location: homepage.php");
        }

}else{

  $db->closeConnection();
  header("Location: blockedUser.php");
  exit();

}

?>
