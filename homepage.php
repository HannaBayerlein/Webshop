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
       <p>Pick your cupcakes!</p>
			 <form method="post" action="addtocart.php">


			 <table id="items" align="center" style="width:75%">
				 <tr>
					 <td> <p><img src="https://cdn2.cdnme.se/894481/9-3/large6_57e6c1622a6b22897f4d4a1a.jpg" alt="Annie" style="width:100%"></p></td>
					 <td> <p><img src="https://cdn3.cdnme.se/894481/9-3/large1_57e6c160ddf2b33df604c3e4.jpg" alt="Annie" style="width:100%"></p></td>
					 <td> <p><img src="https://cdn3.cdnme.se/894481/9-3/large2_57e6c15ee087c302bcac0d7f.jpg" alt="Annie" style="width:100%"></p></td>
				 </tr>
				 <tr>
					<td> <p> Pumpkin </p></td>
					<td> <p> Strawberry </p></td>
					<td> <p> Rainbow  </p></td>
				</tr>
				<tr>
				 <td align="center"><button name="item" type="submit" value="pumkin">KÖP</button></td>
				 <td align="center"><button name="item" type="submit" value="strawberry">KÖP</button></td></td>
				 <td align="center"><button name="item" type="submit" value="rainbow">KÖP</button></td></td>
			 </tr>
			 <tr>
				 <tr>
					 <td> <p><img src="https://cdn2.cdnme.se/894481/9-3/large7_57e6c1569606ee58b8e9c8f4.jpg" alt="Annie" style="width:100%;"></p></td>
					 <td> <p><img src="https://cdn3.cdnme.se/894481/9-3/larg8_57e6c1542a6b22896870d948.jpg" alt="Annie" style="width:100%;"></p></td>
					 <td> <p><img src="https://cdn3.cdnme.se/894481/9-3/large3_57e6c15c9606ee587f8bd716.jpg" alt="Annie" style="width:100%;"></p></td>
				 </tr>
				 <tr>
					<td> <p> Rose </p></td>
					<td> <p> Mint </p></td>
					<td> <p> Flower </p></td>
				</tr>
				<tr>
				 <td align="center"><button name="item" type="submit" value="rose">KÖP</button></td>
				 <td align="center"><button name="item" type="submit" value="mint">KÖP</button></td></td>
				 <td align="center"><button name="item" type="submit" value="flower">KÖP</button></td></td>
			 </tr>
				 <tr>
					 <td> <p><img src="https://cdn1.cdnme.se/894481/9-3/large4_57e6c15a9606ee5894045a5f.jpg" alt="Annie" style="width:100%;"></p></td>
					 <td> <p><img src="https://cdn3.cdnme.se/894481/9-3/large5_57e6c1589606ee58828fe776.jpg" alt="Annie" style="width:100%"></p></td>
					 <td> <p><img src="https://cdn1.cdnme.se/894481/9-3/large9_57e6c1519606ee58da02972d.jpg" alt="Annie" style="width:100%;"></p></td>
					 </tr>
				 <tr>
					<td> <p> Umberella </p></td>
					<td> <p> Pink </p></td>
					<td> <p> Spooky </p></td>
				</tr>
				<tr>
				 <td align="center"><button name="item" type="submit" value="umbrella">KÖP</button></td>
				 <td align="center"><button name="item" type="submit" value="pink">KÖP</button></td></td>
				 <td align="center"><button name="item" type="submit" value="spooky">KÖP</button></td></td>
			 </tr>
			 </table>
			   </form			
			<div style="color:#E00000">
            <h>Kommentarer</h>
			</div>
			<form action="comments.php" method="POST" id="commentbox"> 
				<input type="Submit" value"Skicka">
			</form>
</div>

<a href=payment.php>PAY</a>

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
