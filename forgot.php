<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
	?>
	<script>
	alert("Please logout");
	window.location="index.php";
	</script>
	<?php
  }
  else
  {
?>
<!DOCTYPE html>
<html>
<head>
<title>LifeStream Blood Donation</title>
<link rel="stylesheet" href="styleforgot.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
	<li><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=eddy_ayim@gmail.com&item_name=Life+Stream+Blood+Bank&item_number=Fall+Cleanup+Campaign&amount=25%2e00&currency_code=USD">Donate With Paypal</a></li>
  	<li><a href="feedback.php">FeedBack</a></li>
  	<li><a href="wdb.php">Why Donate Blood</a></li>
  	<li><a href="home.php">Home</a></li>
</ul>
</div>
  <?php
  }
  ?>
<section class="homeTop" id="top">
<body>
<div class="title">
  <h2>ACCEPTOR REGISTER</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
    <form style="margin-top: 13px;" method="post" action="sms/example.php">
	  <label class="label"> Enter your Email</label><input type="email"name="email"required />
    <button name="send">Sent OTP</button>
	</form>
  </div>   
  </body>
</section>
</body>
</html>