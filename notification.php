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
<link rel="stylesheet" href="stylenotification.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
 <li><a href="logout.php">Logout</a></li>
  <li><a href="login.php">MyProfile</a></li>
  <li><a href="home.php">Home</a></li>
</ul>
</div>
  <body>
<div class="title">
  <h2>NOTIFICATIONS</h2>
  <table>
  <tr>
    <th>Sl No</th>
    <th>Name</th>
    <th>Contact No</th>
     <th>gender</th>
     <th>age</th>
     <th>location</th>
      <th>Email</th>
      <th>Date of Need</th>
       <th>Action</th>
  </tr>
  <?php
  $i=1;
  $conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
  $sql="select blood_group from donor_register where l_id='$lid'";
  $result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($data=mysqli_fetch_array($result))
		{
			$bloodgroup=$data['blood_group'];
		}
	}
  $sql="select * from notification where blood_group='$bloodgroup'";
  $result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($data=mysqli_fetch_array($result))
		{
			$nid=$data['id']
  ?>
  <tr>
    <th><?php echo $i++;?></th>
    <th><?php echo $data['name'];?></th>
    <th><?php echo $data['phone_no'];?></th>
	<th><?php echo $data['gender'];?></th>
    <th><?php echo $data['age'];?></th>
    <th><?php echo $data['state'].','.$data['district'].','.$data['location'];?></th>
	<th><?php echo $data['email'];?></th>
    <th><?php echo $data['date'];?></th>
	<th><?php $sql1="select status from notification_donor_info where n_id='$nid' and l_id='$lid'";
	 	 	$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>0)
			{
					while($status=mysqli_fetch_array($result1))
					{
						$status=$status[0];
					echo $status;
					}
			}
			else
			{
			?>
			<a href="action_accept.php?na=<?php echo $data["id"];?>">Accept</a>
            <br><a href="action_reject.php?na=<?php echo $data["id"];?>">Reject</a>
            <?php
			}
			?>
				 </th>
  </tr>
  <?php
		}
	}
	?>
  </table>
</div>
</body>
</html>
