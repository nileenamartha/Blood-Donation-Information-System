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
 <li><a href="logout.php">Logout</a></li>
  <li><a href="Login_Acceptor.php">MyProfile</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
</div>
  <body>
<div class="title">
  <h2>Response</h2>
  <table>
  <tr>
    <th>Sl No</th>
    <th>Name</th>
    <th>Blood Group</th>
	<th>Contact No</th>
    <th>Location</th>
	<th>Date</th>
    <th>Status</th>
  </tr>
  <?php
  $i=1;
  $nid=$_GET["na"];
  $conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
  
  $sql="select * from notification_donor_info where n_id='$nid'";
  $result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($data=mysqli_fetch_array($result))
		{
  ?>
  <tr>
    <th><?php echo $i++;?></th>
    <th><?php echo $data['name'];?></th>
    <th><?php echo $data['blood_group'];?></th>
	<th><?php echo $data['phone_no'];?></th>
    <th><?php echo $data['state'].','.$data['district'].','.$data['location'];?></th>
	<th><?php echo $data['date'];?></th>
    <th><?php echo $data['status'];?></th>
  </tr>
  <?php
		}
	}
	?>
   </table>
</div>
</body>
</html>
