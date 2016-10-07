<?php
	require_once('database.inc.php');
	session_start();
	$db = $_SESSION['db'];
    if($db == null) {
        header("Location: startpage.php");
        exit();
    }

	$username = $_SESSION['username'];
	$items = $_SESSION['items'];

    $db->openConnection();
    if (!$db->compareCookie($_SESSION['login_cookie'], $username)){
        header("Location: startpage.php");
        exit();
    }
    $db->closeConnection();
?>
