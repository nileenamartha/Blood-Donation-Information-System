<?php
$email=$_POST["email"];
$password=$_POST["password"];
$conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="select * from login where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($data=mysqli_fetch_array($result))
	{
		$type=$data[3];
		$l_id=$data[0];
		session_start();
		$_SESSION["l_id"]=$l_id;
		if($type=='admin')
		{
			header("location:admin_login.php");
		}
		else if($type=='donor')
		{
			header("location:login.php");
		}
		else if($type=='acceptor')
		{
			header("location:Login_Acceptor.php");
		}
		else 
		{
			?>
					<script>
					alert("Account under Verification. Try Again Later")
					window.location="index.php"
					</script>
					<?php
		}
	}
}
else
{
	?>
		<script>
        alert("Username or Password Incorrect.")
        window.location="index.php"
        </script>
    <?php
}
?>
