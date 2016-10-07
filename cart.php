<?php
    include "security.php";
	require_once('database.inc.php');

	session_start();
	$db = $_SESSION['db'];
	$username = $_SESSION['username'];
    $item = $_SESSION['items'];

?>

<html>
<title>Your Cart</title>
<body>
	<div class="upper">
	<b>Inloggad som: </b>  <?php print $username ?>
	</div>
<div class="transbox">
       <p>Your cart</p>
        <?php foreach ($item as $entry) echo $entry . ','; ?>
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
  height: auto;
  min-height: 500px;
  margin: 20px 5px 5px 5px;
  background: rgba(255,255,255,0.8);
  border-radius: 5px;
}

div.transbox p {
  font-family: Calibri;
  font-size: 35px;
  padding: 5px 5px 5px 5px;
  color: #000000;
  text-align: center;

}

button {
	 font-size: 25px;
	 color: #000000;
	 padding:5px 15px;
	 background:#33cc66;
	 border:5px;
	 border-radius: 15px;
	 border: 2px solid #000;
}
</style>
