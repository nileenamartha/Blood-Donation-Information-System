<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:../index.php"); 
	  }
?>
<!DOCTYPE html>
<html>
<head>
<title>LifeStream Blood Donation</title>
<link rel="stylesheet" href="style-confirm.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
 <li><a href="../logout/logout.php">Logout</a></li>
  <li><a href="../donor_login/login.php">MyProfile</a></li>
  <li><a href="../index.php">Home</a></li>
</ul>
</div>
  <body>
<section class="homeTop" id="top">
<div id="text">
<p>
<span style="font-family:Lucida Calligraphy;">Are you sure you want to deactivate the profile?.</span>
</p>
<blockquote>
  <blockquote>
    <p>
      <button onClick="window.location.href='../donor_login/action_deactivate.php'">Yes</button><npbs><npbs> 
      <button onClick="window.location.href='../donor_login/login.php'">No</button>
    </p>
  </blockquote>
</blockquote>
</div>
</body>
</html>
