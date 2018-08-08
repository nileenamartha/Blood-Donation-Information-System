<?php
$temp=$_GET["na"];
$conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="select user_type from login where id='$temp'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
	while($data=mysqli_fetch_array($result))
	{
	if($data["user_type"]=='pending')
	{
		$sql="update login set user_type='donor' where id='$temp'";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			?>
            <script>
			alert("Accepted Successfully!")
			window.location="welcome.php"
			</script>
            <?php
		}
	}
	else
	{
		?>
            <script>
			alert("Already accepted")
			window.location="admin_donor_info.php"
			</script>
            <?php

	}
	}
	
}
else
{
	header("location:index.php");
}
?>
