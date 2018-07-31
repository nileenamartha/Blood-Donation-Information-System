<?php
$name=$_POST["name"];
$email=$_POST["email"];
$location=$_POST["location"];
$suggestion=$_POST["suggestion"];
$conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="insert into feedback values(null,CURDATE(),'$name','$email','$location','$suggestion')";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
    <script>
	alert("Thankyou for your Feedback");
	window.location="home.php";
	</script>
    <?php
}
?>
