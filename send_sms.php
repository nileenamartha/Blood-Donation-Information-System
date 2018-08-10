<?php
$nid=$_GET["na"];
$conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
$sql="select phone_no from notification where id='$nid'";
$result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
          while($data=mysqli_fetch_array($result))
          {
            $to=$data["phone_no"];
          }
      }
require('textlocal.class.php');

$textlocal = new Textlocal(false,false, 'BIQUMilYdl4-cHeNgYIE03vFTPrTEqm1QPNFGTJMh5');

$numbers = array($to);
$sender = 'LifeStream';
$message = 'Your request has been accepted by someone.Please login to view details';
try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    ?>
		<script>
			window.location.href="notification.php";
		</script>
    <?php
} catch (Exception $e) {
    //die('Error: ' . $e->getMessage());
}
?>
