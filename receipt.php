<?php
    include "security.php";
	session_start();
	require_once('database.inc.php');
	$db = $_SESSION['db'];
	$username = $_SESSION['username'];
    $items = $_SESSION['items'];
  //  $total_cost = $_SESSION['cost'];
    $_SESSION['items'] = [];
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
    <h1> RECEIPT </h1>
    <font size=4 face="avenir">Full name:
<?php
    echo htmlspecialchars($_GET['fullname'], ENT_QUOTES, 'UTF-8');
?>

<br />
Address:
<?php
    echo htmlspecialchars($_GET['address'], ENT_QUOTES, 'UTF-8');
?>

<br />

Username:
<?php
    echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
?>

<br />
<br />

<br />
<table>
<tr><td width=10%> PRODUCTS </td><td width=10%> PRICE </td></tr>
<tr><td></td><td></td></tr>
<?php
    foreach ($items as $entry) {
        print "<tr><td>$entry</td><td>100</td></tr>";
}?>
</table>
<br />
    Total cost: <?php print count($items)*100;
    //$total_cost
?>
     </font>
		 <a href="homepage.php"> <input size=3 type="button" value="Back to Homepage"></a>

</div>
</body>
</html>
