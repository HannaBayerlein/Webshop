<?php
	require_once('database.inc.php');
	session_start();
	$db = $_SESSION['db'];
	$username = $_SESSION['username'];

  $db->openConnection();
  $commentIDs = $db->getAllCommentIDs();
  $db->closeConnection();

?>

<html>
<title>HomePage</title>
<body>
	<div class="upper">
	<b>Inloggad som: </b>  <?php print htmlspecialchars($username, ENT_QUOTES, 'UTF-8');?>
	</div>
<div class="transbox">
    <div class="title">Make a comment</div>
      <form method="post" action="addComment.php">
          <p>Name:</p>
          <input type="text" name="name">
          <br>
          <p>Kommentar:</p>
          <input type="textarea" name="comment" rows="4" cols="50" minlength="1" maxlength="200">
          <br><br>
          <input type="submit" value="Skicka kommentar">
      </form>
</div>
<div class="transbox">
  <p>
  <?php
  	require_once('database.inc.php');
  	$db = $_SESSION['db'];

    $db->openConnection();

    foreach ($commentIDs as $commentID) {
      $commentName = $db->getCommentName($commentID);
      $comment = $db->getComment($commentID);
      print "<b>Skrivet av:</b>" . htmlspecialchars($commentName, ENT_QUOTES, 'UTF-8');
      print "<br>";
      print htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');
      print "<br><br>";
    }
    $db->closeConnection();
  ?>
</p>
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
  width: 50%;
  height: auto;
	min-height: 300px;
  margin: auto;
  background: rgba(255,255,255,0.8);
  border-radius: 5px;
}
div.transbox p {
  font-family: Calibri;
  font-size: 20px;
  margin: 5px 5px 5px 5px;
  color: #000000;
  text-align: left;
}
div.title {
  font-family: Calibri;
  font-size: 35px;
  text-align: center;
}

input{
  margin: 5px 5px 5px 5px;
}

input[type=textarea]{
width: 100%;
height: 50px;
resize: none;
margin: auto;
}

input[type=text]{
  width: 100%;
  margin: auto;
}

input[type=submit] {
	 font-size: 25px;
	 color: #000000;
	 padding:5px 15px;
	 background:#33cc66;
	 border:5px;
	 border-radius: 15px;
	 border: 2px solid #000;
}
</style>
