

<?php
//session_start();
//require_once('../function/class.user.php');
//**********************************************
  echo "No Sign Up";
//**********************************************



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDO : Sign up</title>
<link rel="stylesheet" href="../style/style.css" type="text/css"  />
</head>
<body>

<div id="main2">


        <form method="post" >
            <h1>Sign up.</h1>

                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php //echo $error; ?>
                     </div>

                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='login.php'>login</a> here
                 </div>


            <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php // if(isset($error)){echo $uname;}?>" />


            <input type="text" class="form-control" name="txt_umail" placeholder="Enter Email" value="<?php if(isset($error)){echo $umail;}?>" />


            	<input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />


            	<input value="SIGN UP" type="submit" class="button" name="btn-signup">


            <p>have an account ! <a href="login.php">SIGN IN</a> or go <a href="../index.php">HOME</a></p>
        </form>


</div>

</body>
</html>
