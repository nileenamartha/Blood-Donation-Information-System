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
<link rel="stylesheet" href="styleadminfeedback.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
<li><a href="logout.php">Logout</a></li>
  <li><a href="admin_login.php">MyProfile</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
</div>
  <body>
<div class="title">
  <h2>Feedback</h2>
  <table>
  <tr>
  	<th>Sl no</th>
    <th>Date</th>
    <th>Name</th>
    <th>Email</th>
	<th>Location</th>
	<th>Suggestion</th>
  </tr>
   <?php
   $i=1;
  $conn=mysqli_connect("localhost","root","","blood_info");
  $sql="select * from feedback";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
	  while($data=mysqli_fetch_array($result))
	  {
  ?>
  <tr>
    <th><?php echo $i++?></th>
    <th><?php echo $data["date"]?></th>
    <th><?php echo $data["name"]?></th>
    <th><?php echo $data["email"]?></th>
	<th><?php echo $data["location"]?></th>
	<th><?php echo $data["suggestion"]?></th>
  </tr>
  <?php
	  }
  }
  ?>
  </table>
</div>
</body>
</html>
