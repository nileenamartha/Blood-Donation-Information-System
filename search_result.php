<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>LifeStream Blood Donation</title>
	<link rel="stylesheet" href="stylesearchresult.css">
	</head>
	<body>
	<div id="navBar">
	<h2>LifeStream</h2>
	<ul>
	<li><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=eddy_ayim@gmail.com&item_name=Life+Stream+Blood+Bank&item_number=Fall+Cleanup+Campaign&amount=25%2e00&currency_code=USD">Donate With Paypal</a></li>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="feedback.php">FeedBack</a></li>
	<li><a href="wdb.php">Why Donate Blood</a></li>
	<li><a href="index.php">Home</a></li>
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
<title>LifeStream Blood Donation</title>
<link rel="stylesheet" href="stylesearchresult.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
<li><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=eddy_ayim@gmail.com&item_name=Life+Stream+Blood+Bank&item_number=Fall+Cleanup+Campaign&amount=25%2e00&currency_code=USD">Donate With Paypal</a></li>
  <li><a href="feedback.php">FeedBack</a></li>>
  <li><a href="wdb.php">Why Donate Blood</a></li>
  <li><a href="index.php">Home</a></li>
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
  $conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
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
