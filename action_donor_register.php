<?php
$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$weight=$_POST['weight'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$status=$_POST['status'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$state=$_POST['state'];
$district=$_POST['district'];
$location=$_POST['location'];
if($pwd!=$cpwd)
{
	?>
    <script>
	alert("Password doesn't match. ");
	window.location="register.php";
	</script>
    <?php
}
else
{
    $conn = mysqli_connect("localhost", "root", "","blood_info");
	$sql="INSERT INTO login VALUES (null,'$email','$pwd','pending','$phone_no')";
	$result=mysqli_query($conn,$sql);
	if(!$result)
	{
		?>
		<script>
			alert("Email already registered!.");
			window.location.href="register.php";
		</script>
        <?php
	}
	else
	{
	$lid=mysqli_insert_id($conn);
	$sql="INSERT INTO donor_register VALUES (null,'$lid','$name','$age','$bloodgroup','$gender','$dob','$weight','$address','$phone_no','$state','$district','$location','$status','$email')";
	$query=mysqli_query($conn,$sql);
	if($query){
		?>
		<script>
			alert("Registration Completed.");
			window.location.href="home.php";
		</script>
	<? }
	else{
		?>
		<script>
		alert("Error in Registration! Try again");
		window.location.href="home.php";
		</script>
		<?php
	}
}
}
?>
