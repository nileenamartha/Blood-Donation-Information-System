<?php
$name=$_POST['name'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$c_pwd=$_POST['c_pwd'];

	$conn = mysqli_connect("localhost", "root", "","blood_info");
	$sql="INSERT INTO login VALUES (null,'$email','$pwd','acceptor','$phone_no')";
	$result=mysqli_query($conn,$sql);
	$lid=mysqli_insert_id($conn);
	$sql="INSERT INTO acceptor_register VALUES (null,'$lid','$name','$address','$phone_no','$email')";

$query=mysqli_query($conn,$sql);
	if($query){
		?>
		<script>
			alert("Registration Completed. Please Login Using your Email and Password");
			window.location.href="index.php";
		</script>
	<? }
	else{
		?>
		<script>
		alert("Error in Registration! Try again");
		window.location.href="action_register.php";
		</script>
		<?php
	}
