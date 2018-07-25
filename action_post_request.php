<?php
session_start();
$lid=$_SESSION["l_id"];
$conn=mysqli_connect("localhost","root","","blood_info");
$sql="select name, phone_no,email from acceptor_register where l_id='$lid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($data=mysqli_fetch_array($result))
	{
		$phone_no=$data['phone_no'];
		$email=$data['email'];
	}
}
$name=$_POST['name'];
$bloodgroup=$_POST["bloodgroup"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$state=$_POST["state"];
$district=$_POST["district"];
$location=$_POST["location"];
$date=$_POST["date"];
//$n=$_POST["notify"];
//$notify=implode(',',$n);

$sql="INSERT INTO notification VALUES (null,'$lid','$name','$bloodgroup','$phone_no','$gender','$age','$state','$district','$location','$date',null,'pending','$email')";
$result=mysqli_query($conn,$sql);
if($result)
{
	?>
    <script>
	alert("Successfully Posted Your Request");
	window.location.href="../acceptor_login/Login_Acceptor.php";
	</script>
    <?php
}
?>
