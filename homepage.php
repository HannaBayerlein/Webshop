<?php
    include "security.php"
?>

<html>
<title>HomePage</title>
<body>
	<div class="upper">
		<table id="items" align="center" style="width:100%">
			<tr>
				<td> <p><b>Inloggad som: </b> <?php print htmlspecialchars($username, ENT_QUOTES, 'UTF-8');?> </p></td>
				<td>  <p><a href="comments.php"><b>Make a comment</b></a></p>
				<td> <p><a href="payment.php"><b>Kundvagn:</b>
					<?php print count($items);?> st produkter. </a></p>

				<td><p><a href="logout.php"><b>Logga ut</b></a></p></td>
			 </tr><td></td><td></td><td><b>Summa:</b> <?php print count($items)*100 ;?>:-</td>

			</tr>
</table>
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
				 <td align="center"><button name="item" type="submit" value="Pumpkin">KÖP</button></td>
				 <td align="center"><button name="item" type="submit" value="Strawberry">KÖP</button></td></td>
				 <td align="center"><button name="item" type="submit" value="Rainbow">KÖP</button></td></td>
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
				 <td align="center"><button name="item" type="submit" value="Rose">KÖP</button></td>
				 <td align="center"><button name="item" type="submit" value="Mint">KÖP</button></td></td>
				 <td align="center"><button name="item" type="submit" value="Flower">KÖP</button></td></td>
			 </tr>
				 <tr>
					 <td> <p><img src="https://cdn1.cdnme.se/894481/9-3/large4_57e6c15a9606ee5894045a5f.jpg" alt="Annie" style="width:100%;"></p></td>
					 <td> <p><img src="https://cdn3.cdnme.se/894481/9-3/large5_57e6c1589606ee58828fe776.jpg" alt="Annie" style="width:100%"></p></td>
					 <td> <p><img src="https://cdn1.cdnme.se/894481/9-3/large9_57e6c1519606ee58da02972d.jpg" alt="Annie" style="width:100%;"></p></td>
					 </tr>
				 <tr>
					<td> <p> Umbrella </p></td>
					<td> <p> Pink </p></td>
					<td> <p> Spooky </p></td>
			 </tr>
				<tr>
				 <td align="center"><button name="item" type="submit" value="Umbrella">KÖP</button></td>
				 <td align="center"><button name="item" type="submit" value="Pink">KÖP</button></td></td>
				 <td align="center"><button name="item" type="submit" value="Spooky">KÖP</button></td></td>
	 </tr>

			 </table>
			   </form>
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

a:link {
    text-decoration: none;
}

a:visited {
	color: #000000;
  text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
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
