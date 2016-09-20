<?php
	require_once('database.inc.php');

	session_start();
	$db = $_SESSION['db'];
	$username = $_SESSION['username'];
?>

<html>
<title>HomePage</title>
<body>
	<div class="upper">
	<b>Inloggad som: </b>  <?php print $username ?>
	</div>
<div class="transbox">
       <p>Welcome!</p>
</div>

</body>
</html>



<style>
body{
  background:  #ffffff url(https://cdn3.cdnme.se/894481/9-3/cupcakes-wallpaper-1_57e00c5c2a6b2210434cc2ed.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
  background-position: center center;      /* center bottom ?? bättre för avlång vy!! */
  background-attachment: fixed;
  border: 0px solid black;
  align-content: center;
}

div.upper{
	font-family: Calibri;
	font-size: 20px;
}




div.transbox {
  width: 100%;
  height: 100%;
  margin: 20px 5px 5px 5px;
  background: rgba(255,255,255,0.8);
  float: left;
  border-radius: 5px;
}
div.transbox p {
  font-family: Calibri;
  font-size: 35px;
  padding: 5px 5px 5px 5px;
  color: #000000;
  text-align: center;
}
</style>
