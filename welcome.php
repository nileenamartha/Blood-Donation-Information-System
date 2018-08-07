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
        ?>
<?php
  // Authorisation details.
  $username = "nileenamv@gmail.com";
  $hash = "bdbb469355e2139b95b6e545bee29c6d4027d7e19d482f0782aed18fe75350f6";
  // Config variables. Consult https://txtlocal.co.uk/docs for more info.
  $test = "0";
  // Data for text message. This is the text message data.
  $sender = "Lifestream"; // This is who the message appears to be from.
  $numbers = "$to"; // A single number or a comma-seperated list of numbers
  $message = "Welcome to Our Website LifeStream.";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.txtlocal.com/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
?>
<script>
alert("");
window.location="admin_donor_info.php";
</script>


