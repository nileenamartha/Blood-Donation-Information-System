<?php
session_start();
$lid=$_SESSION["l_id"];
$conn = mysqli_connect("localhost", "root", "","blood_info");
$sql="delete from acceptor_register where l_id='$lid'";
$result=mysqli_query($conn,$sql);
$sql="delete from login where id='$lid'";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
    <script>
	alert("Successfully deactivated the profile");
	window.location="../home/home.php";
	</script>
   <?php
}
session_destroy();
?>