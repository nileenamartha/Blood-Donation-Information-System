<?php
$email=$_POST["email"];
	$conn=mysqli_connect("localhost","root","","blood_info");
	$sql="select * from login where email='$email'";
	$result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
          while($data=mysqli_fetch_array($result))
          {
			$password=$data['password'];
			$phone_no=$data['phone_no'];
		
					?>
	
<?php
error_reporting(E_ALL);
ob_implicit_flush(true);

include_once "class.curl.php";
include_once "class.sms.php";
include_once "cprint.php";

$smsapp=new sms();
$smsapp->setGateway('way2sms');
$myno='9048334953';
$p='saawariya';
$tonum=$phone_no;
$mess="Your password is ".$password." Please login and change your password immediately.";

cprint("Logging in ..\n");
$ret=$smsapp->login($myno,$p);

if (!$ret) {
   cprint("Error Logging In");
   exit(1);
}

print("Logged in Successfully\n");

print("Sending SMS ..\n");
$ret=$smsapp->send($tonum,$mess);

if (!$ret) {
   print("Error in sending message");
   exit(1);
}

print("Message sent");
?>
<script>
alert("Password has been sent to your registered phone number.");
window.location="../../home/home.php";
</script>

<?php
	  }
	  }
?>
