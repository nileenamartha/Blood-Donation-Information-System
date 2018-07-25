<?php
$name=$_POST["name"];
$email=$_POST["email"];
$location=$_POST["location"];
$suggestion=$_POST["suggestion"];
$conn=mysqli_connect("localhost","root","","blood_info");
$sql="insert into feedback values(null,CURDATE(),'$name','$email','$location','$suggestion')";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
    <script>
	alert("Thankyou for your Feedback");
	window.location="../home/home.php";
	</script>
    <?php
}
?>
