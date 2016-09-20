<html>
<head>
<title>KrustyCookie.se</title>
</head>
<body>


<div class="login">
  <br>
  <br>
  <font size=6 face="avenir">Create user to order cookies</font>
  <br>
  <font size=4 face="avenir"> <i> Fill in your information </i></font>
  <br>

<form method="post" action="login.php">
  <br>
    <font size=4 face="avenir">Username: </font>

    <input type="text" size="20" name="username" >
    <br>
    <font size=4 face="avenir">Password:  </font>
    <input type="password" size="20" name="password" >

    <br>
    <font size=4 face="avenir"> Address:   </font>
    <input type="text" size="20" name="address" >
    <br><br>
    <input type="submit" value="Skapa konto">

</form>
</login>
</body>
</html>


<style>
body{
  background:  #ffffff url(https://cdn1.cdnme.se/894481/9-3/cupcake-wallpaper-8_57dffbd39606ee683f5839fe.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
  background-position: center center;
  background-attachment: fixed;
  border: 0px solid black;
  align-content: center;
}

a:link {
    text-decoration: none;
}

 form {
   color: #000000;
   font-size: 25px;
 }

 input[type=text], input[type=password]{
   width: 30%;
 }

 input[type=submit] {
   font-size: 25px;
   padding:5px 15px;
   background:#33ffff;
   border:5px;
   border-radius: 15px;
   boder: 5px;
   border: 2px solid #000;
 }

 input[type=button] {
    font-size: 25px;
    color: #ffffff;
    padding:5px 15px;
    background:#cc0066;
    border:5px;
    border-radius: 15px;
    border: 2px solid #000;
 }

input[type=submit]:hover, input[type=button]:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

div.login {
  width: 50%;
  height: 50%;
  margin: 150px 5px 5px 5px;
  background: rgba(255,255,255,0.5);
  float: left;
  border-radius: 200px;
  text-align: center;
}

div.login p {
  font-family: Calibri;
  font-size: 35px;
  padding: 5px 5px 5px 5px;
  color: #000000;
  text-align: center;
}
</style>
