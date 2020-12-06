<?php

//	require_once("../session.php");

//	require_once("../class.user.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert, Update, Delete using jQuery, PHP and MySQL</title>
<link href="../style/style1.css" rel="stylesheet" type="text/css">

<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){

		var table = document.getElementById(id);
		var rows = table.getElementsByTagName("tr");

		for(i = 0; i < rows.length; i++){
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.altrowstable {
	border-width: 1px;
	border-color:  #ddd;
	font-size: 14px;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
.oddrowcolor{
	background-color:#fcfcfc;
}
.evenrowcolor{
	background-color:#e0dbdb;
}

ul.pagination {
    text-align:center;
    color:#1f447f;
}
ul.pagination li {
    display:inline;
    padding:0 3px;
}
ul.pagination a {
    color:#1f447f;
    display:inline-block;
    padding:5px 10px;
    border:1px solid #1f447f;
    text-decoration:none;
}
ul.pagination a:hover,
ul.pagination a.current {
    background:#1f447f;
    color:#fff;
}



</style>

<!-- Table goes in the document BODY -->



</head>

<body>



	<div id="main3">

		<div id="header"><img src="../img/logo.png"></div>

	<div id="manu">
	<ul>
	<li><a href="home.php" style="background:#1f447f; color:#fff;" >HOME</a></li>
	<li><a  href="../index.php" >ORDER NOW</a></li>
	<li><a href="../login/logout.php?logout=true" >SIGN OUT</a></li>
	</ul>
	</div>
<br>
<div id="content">
	<h2><a class="button" href="../index.php">PLACE ORDER</a>  [Order Detail] </h2>

<center>
    	<table class="altrowstable" id="alternatecolor">
        <thead>
        <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Address</th>
				<th>Order</th>
		    <th>Date</th>
				<th>Status</th>

        </tr>
        </thead>
        <tbody>
					<?php
					//require_once '../connection/dbconfig.php';

					//**********************************************
				    echo "No order's Detail";
				  //**********************************************



?>





<div id="footer3">
<center>
	<p>Home . Product . Contact Us . Services </p>

	<p><img src="../img/facebook.png"> <img src="../img/twitter.png">  <img src="../img/u.png"></p>
</center>
<b>  Copyrights © 2017 ComputerPakistan. Design by Naeem Hussain</b>



    </div>



</body>
</html>
