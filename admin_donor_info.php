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
<link rel="stylesheet" href="styleadmindonor.css">
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
  <h2>Donor Details</h2>
  <table>
  <tr>
  	<th>Sl no</th>
    <th>Name</th>
    <th>Blood Group</th>
	<th>Gender</th>
	<th>Contact No</th>
	<th>Email</th>
	<th>Options</th>
  </tr>
   <?php
   $i=1;
  $conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
  $sql="select * from donor_register";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
	  while($data=mysqli_fetch_array($result))
	  {
		  $lid=$data["l_id"];
  ?>
  <tr>
    <th><?php echo $i++?></th>
    <th><?php echo $data["name"]?></th>
    <th><?php echo $data["blood_group"]?></th>
	<th style="padding-top: 20px;"><?php echo $data["gender"]?></th>
	<th><?php echo $data["phone_no"]?></th>
	<th><?php echo $data["email"]?></th>
	<th><a href="donor_accept.php?na=<?php echo $data["l_id"];?>"><?php  $sql1="select user_type from login where id='$lid'";
	  $result1=mysqli_query($conn,$sql1);if(mysqli_num_rows($result1)>0){ while($status=mysqli_fetch_array($result1)){ if($status[0]=='pending'){ echo"Accept";?></a><?php } else { echo "Accepted";  }}}?><br><br> <a href="delete_donor.php?na=<?php echo $data["l_id"];?>">Delete</a></th>
  </tr>
  <?php
	  }
  }
  ?>
  </table>
</div>
</body>
</html>
