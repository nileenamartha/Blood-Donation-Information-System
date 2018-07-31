<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:home.php"); 
	  }
?>
<!DOCTYPE html>
<html>
<head>
<title>LifeStream Blood Donation</title>
<link rel="stylesheet" href="styleacceptorlogin.css">
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
<?php
$conn=mysqli_connect("localhost","root","","blood_info");
$sql="select name from acceptor_register where l_id='$lid'";
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
<button onClick="window.location.href='edit_acceptor.php'">Edit Profile</button>
</div>
<div id="post">
<button onClick="window.location.href='PostRequest.php'">Post Request</button>
</div>
<div id="history">
<button onClick="window.location.href='history.php'">History</button>
</div>
<div id="de">
<button onClick="window.location.href='confirm_deactivate_acceptor.php'">Deactivate</button>
</div>
</div>
</section>
</body>
</html>
