<?php
$temp=$_GET["na"];
$conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="delete from login where id='$temp'";
$result=mysqli_query($conn,$sql);
$sql="delete from acceptor_register where l_id='$temp'";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
	 <script>
			alert("Deleted Successfully")
			window.location="admin_acceptor_details.php"
			</script>
            <?php
}
?>
