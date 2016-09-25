<html>
<title>KrustyCookie.se</title>
<body>

<div class="transbox">
  <br>
  <br>
       <font size=6 face="avenir">Welcome to Krusty Cookie</font>

       <br>
      <font size=3 color="green" face="avenir"> <b> Log in with your newly created account. </b></font>
       <br>
       <br>
       <form method="post" action="login.php">
            <font size=4 face="avenir">Username: </font>
           <input type="text" size="20" name="username" >
           <br>
            <font size=4 face="avenir">Password:</font>
           <input type="password" size="20" name="password" >
           <br>

           <br>
           <br>
           <input type="submit" value="Log In">

           <a href="createUserPage.html"> <input size=3 type="button" value="Create Account"></a>
        </form>
</div>
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

div.transbox {
  width: 50%;
  height: 50%;
  margin: 150px 5px 5px 5px;
  background: rgba(255,255,255,0.5);
  float: left;
  border-radius: 200px;
  text-align: center;
}

div.transbox p {
  font-family: Calibri;
  font-size: 35px;
  padding: 5px 5px 5px 5px;
  color: #000000;
  text-align: center;
}
</style>
