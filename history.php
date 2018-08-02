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
<link rel="stylesheet" href="stylehistory.css">
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
  <h2>HISTORY</h2>
  <table>
  <tr>
    <th>Sl No</th>
    <th>Name</th>
    <th>Blood Group</th>
	<th>Contact No</th>
	<th>Date of Need</th>
    <th>Location</th>
	<th>Status</th>
  </tr>
  <?php
  $i=1;
  $conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
  
  $sql="select * from notification where l_id='$lid'";
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
	<th><?php echo $data['date'];?></th>
    <th><?php echo $data['state'].','.$data['district'].','.$data['location'];?></th>
	<th><?php if($data['status']=='accepted'){;?>Responded<br><a href="notification_donor_info.php?na=<?php echo $data['id'];?>" style="text-decoration:none; color:white;"> View Response</a><?php } else{echo $data['status'];}?>
	<a href="action_delete.php?na=<?php echo $data["id"];?>" style="text-decoration:none; color:white;"><br><br>Delete Request</a></th>
  </tr>
  <?php
		}
	}
	?>
   </table>
</div>
</body>
</html>
