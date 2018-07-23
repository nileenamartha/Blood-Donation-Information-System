<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
	?>
	<script>
	alert("Please logout");
	window.location="../home/home.php";
	</script>
	<?php
  }
  else
  {
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
  <li><a href="../feedback/feedback.php">FeedBack</a></li>
  <li><a href="../why_donate_blood/wdb.php">Why Donate Blood</a></li>
  <li><a href="../home/home.php">Home</a></li>
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
