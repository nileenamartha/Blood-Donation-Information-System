<?php
$nid=$_GET["na"];
$conn=mysqli_connect("localhost","root","","blood_info");
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
  $username = "jasalonline@gmail.com";
  $hash = "b74ad0f4e67db723271535dd736faf1fb27f8763aeae9ba8c97881133eb73afa";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "Life Stream blood info"; // This is who the message appears to be from.
  $numbers = "$to"; // A single number or a comma-seperated list of numbers
  $message = "Welcome to Our Website LifeStream Blood donation .";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
?>
<script>
alert("");
window.location="../admin_donor_info.php";
</script>
