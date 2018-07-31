<?php
session_start();
$lid=$_SESSION["l_id"];
$conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="delete from donor_register where l_id='$lid'";
$result=mysqli_query($conn,$sql);
$sql="delete from login where id='$lid'";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
    <script>
	alert("Successfully deactivated the profile");
	window.location="home.php";
	</script>
   <?php
}
session_destroy();
?>


 
