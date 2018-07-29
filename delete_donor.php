<?php
$temp=$_GET["na"];
$conn = mysqli_connect("localhost", "root", "","blood_info");
$sql="delete from login where id='$temp'";
$result=mysqli_query($conn,$sql);
$sql="delete from donor_register where l_id='$temp'";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
	 <script>
			alert("Deleted Successfully")
			window.location="admin_donor_info.php"
			</script>
            <?php
}
?>