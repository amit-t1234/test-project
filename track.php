
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign In</title>
<link rel="stylesheet" href="style/style1.css" type="text/css"  />
</head
<body>

<div id="main2">

    <div id="header"><img src="img/logo.png"></div>

    <div id="manu">
    <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a style="background:#1f447f; color:#fff;" href="track.php">TRACK ORDER</a></li>
    <li><a href="contact.php">CONTACT</a></li>
    <li><a href="login/login.php">SING IN / SIGN UP</a></li>
    </ul>
    </div>


<div id="content">

<center>
  <form method='post'  action="track.php">

   <table >

   <tr>
       <td colspan="2">	<h1>Track Your Order </h1></td>
   </tr>


   <tr>
       <td>Order No</td>
       <td><input type='text' name='search'   placeholder='' required /></td>
   </tr>

   <tr>
      <td></td><td>
    <button type="submit" class="button" >
TRACK
  </button>
        </td>
    </tr>

</table>
</form>

</center>
<br><br>

  <?php
  require_once 'connection/dbconfig.php';


  //**********************************************
    echo "No Any Record tobe Track";
  //**********************************************



 ?>




</div>

</div>


  </div>
    <div id="footer">
<center>
      <p>Home . Product . Contact Us . Services </p>

      <p><img src="img/facebook.png"> <img src="img/twitter.png">  <img src="img/u.png"></p>
</center>
    <b>  Copyrights © 2017 ComputerPakistan. Design by Naeem Hussain</b>

    </div>

</div>

</body>
</html>
