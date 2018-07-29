<?php
$id=$_GET["na"];
$conn=mysqli_connect("localhost","root","","blood_info");
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