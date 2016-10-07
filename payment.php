<?php
	session_start();
	require_once('database.inc.php');
	$db = $_SESSION['db'];
	$username = $_SESSION['username'];
    $items = $_SESSION['items'];
    $total_cost = $_SESSION['cost'];
    //$address = $db
?>
<html>
<head>
<link href="css/layout.css" rel="stylesheet" type="text/css">
<title>KrustyCookie.se</title>
</head>
<body>
<div class="upper">
	<b>Inloggad som: </b>  <?php print htmlspecialchars($username, ENT_QUOTES, 'UTF-8');?>
<div class="transbox">
  <form method "post" action="receipt.php">
    <font size=4 face="avenir">Full name: </font>
    <input type="text" size="20" name="fullname">
    <br />
    <font size=4 face="avenir">Address: </font>
    <input type="text" size="20" name="address"> <?php print $address?>
    <br />
    <br />
    <font size=4 face="avenir">Products: <?php
    foreach ($items as $entry) {
        print $entry . ", ";
    }?></font>
    <br />
    <font size=4 face="avenir">Total cost: <?php print count($items)*100;
    //$total_cost
?>
</font>
    <br />
    <br />
    <input type="submit" value="Pay">
  </form>
</div>
</body>
</html>
