<?php
$id=$_GET["na"];
$conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="delete from notification where id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
    <script>
	alert("Request has been successfully removed");
	window.location="history.php";
	</script>
    <?php
}
?>
