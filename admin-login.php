<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:../home/home.php"); 
	  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
  <li><a href="../logout/logout.php">Logout</a></li>
  <li><a href="../admin_login/admin_login.php">MyProfile</a></li>
  <li><a href="../home/home.php">Home</a></li>
</ul>
</div>
<h3 style="color:#c02729; width: 200px; height: 6.889;">Welcome ADMIN</h3>
<section class="options" id="op">
<div id="box">
<div id="edit">
<button onclick="window.location.href='../admin_donor_Details/admin_donor_info.php'">Donor Details</button>
</div>
<div id="post">
<button onclick="window.location.href='../admin_acceptor_details/acceptor_details.php'">Acceptor Details</button>
</div>
<div id="post">
<button onclick="window.location.href='../admin_feedback/feedback.php'">Feedbacks</button>
</div>

</div>
</div>
</section>
</body>
</html>
