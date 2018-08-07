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
    $conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
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
			window.location.href="index.php";
		</script>
<?php
		//Testing SmS

	// Authorisation details.
	$username = "nileenamv@gmail.com";
	$hash = "bdbb469355e2139b95b6e545bee29c6d4027d7e19d482f0782aed18fe75350f6";
	// Config variables. Consult https://www.textlocal.com/product/send//docs for more info.
	$test = "0";
	// Data for text message. This is the text message data.
	$sender = "LifeStream Blood donation"; // This is who the message appears to be from.
	$numbers = "$phone_no"; // A single number or a comma-seperated list of numbers
	$message = "Welcome to Our Website of LifeStream Blood donation  Now you are sucsessfully Registered as Official Donor.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('https://www.textlocal.com/product/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
?>
	<? }
	else{
		?>
		<script>
		alert("Error in Registration! Try again");
		window.location.href="index.php";
		</script>
		<?php
	}
}
}
?>
