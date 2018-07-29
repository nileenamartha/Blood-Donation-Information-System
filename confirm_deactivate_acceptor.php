<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:index.php"); 
	  }
?>
<!DOCTYPE html>
<html>
<head>
<title>LifeStream Blood Donation</title>
<link rel="stylesheet" href="styleconfirmdeactivate.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
 <li><a href="logout.php">Logout</a></li>
  <li><a href="Login_Acceptor.php">MyProfile</a></li>
  <li><a href="index.php">Home</a></li>
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
      <button onClick="window.location.href='action_deactivate.php'">Yes</button><npbs><npbs> 
      <button onClick="window.location.href='Login_Acceptor.php'">No</button>
    </p>
  </blockquote>
</blockquote>
</div>
</body>
</html>
