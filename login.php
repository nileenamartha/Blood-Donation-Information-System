<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:index.php"); 
	  ?>
      <!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="styledonorlogin.css">
    </head>
    <body>
    <div id="navBar">
    <h2>LifeStream</h2>
    <ul>
      <li><a href="logout.php">Logout</a></li>
      <li><a href="home">Contact</a></li>
      <li><a href="wdb.php">Why Donate Blood</a></li>
      <li><a href="index.php">Home</a></li>
    </ul>
    </div>
      <?php
	  }
?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styledonorlogin.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="login.php">MyProfile</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
</div>
<?php
$conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="select name from donor_register where l_id='$lid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($data=mysqli_fetch_array($result))
	{
?>
<h3 style="color:#c02729; width: 200px; height: 6.889;"> Welcome <?php echo $data["name"] ?> </h3>
<?php
	}
}
?>
<section class="options" id="op">
<div id="box">
<div id="edit">
<button onClick="window.location.href='edit.php'">Edit Profile</button>
</div>
<div id="Notify">
<button onClick="window.location.href='notification.php'">Notification</button>
</div>
<div id="de">
<button onClick="window.location.href='confirm_deactivate_donor.php'">Deactivate</button>
</div>
</div>
</section>
</body>
</html>
