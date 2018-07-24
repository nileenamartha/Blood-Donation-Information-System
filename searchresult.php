<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
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
	<li><a href="../feedback/feedback.php">FeedBack</a></li>
	<li><a href="../why_donate_blood/wdb.php">Why Donate Blood</a></li>
	<li><a href="../home/home.php">Home</a></li>
	</ul>
	</div>
	<?php
  }
  else
  {
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
  <li><a href="../feedback/feedback.php">FeedBack</a></li>>
  <li><a href="../why_donate_blood/wdb.php">Why Donate Blood</a></li>
  <li><a href="../home/home.php">Home</a></li>
</ul>
</div>
  <?php
  }
  ?>
  <body>
<div class="title">
  <h2>Search Result</h2>
  <table>
  <tr>
  	<th>Sl no</th>
    <th>Name</th>
	<th>Gender</th>
	<th>Age</th>
	<th>Contact No</th>
	<th>Email</th>
	<th>Status</th>
  </tr>
  <?php
  $i=1;
$bloodgroup=$_GET["bloodgroup"];
$state=$_GET["state"];
$district=$_GET["district"];
$location=$_GET["location"];
  $conn = mysqli_connect("localhost", "root", "","blood_info");
  $sql="select name,gender,age,phone_no,status,email from donor_register where blood_group='$bloodgroup' and state='$state' and district='$district' and location='$location'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
	  while($data=mysqli_fetch_array($result))
	  {
  ?>
  <tr>
  	<th><?php echo $i++?></th>
    <th><?php echo $data[0]?></th>
    <th><?php echo $data[1]?></th>
	<th style="padding-top: 20px;"><?php echo $data[2]?></th>
	<th><?php echo $data[3]?></th>
	<th><?php echo $data[5]?></th>
	<th><?php echo $data[4]?></th>
  </tr>
  <?php
	  }
  }
  else
  {
  	echo "No result found";
  }
  ?>
</div>
</body>
</html>
