<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>LifeStream Blood Donation</title>
	<link rel="stylesheet" href="styleacceptorreg.css">
	</head>
	<body>
	<div id="navBar">
	<h2>LifeStream</h2>
	<ul>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="feedback.php">FeedBack</a></li>
	<li><a href="wdb.php">Why Donate Blood</a></li>
	<li><a href="index.php">Home</a></li>
	</ul>
	</div>
	<?php
  }
  else
  {
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styleacceptorreg.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
  <li><a href="feedback.php">FeedBack</a></li>
  <li><a href="wdb.php">Why Donate Blood</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
</div>
  <?php
  }
  ?>
  <body>
<div class="title">
  <h2>ACCEPTOR REGISTER</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
    <form style="margin-top: 13px;" method="post" action="action_acceptor_register.php">
	  <label class="label"> Full Name</label><input type="text" name="name" required/>
	  <label class="label"> Address</label><input type="text"name="address" required />
	  <label class="label">Phone Number</label><input type="number"name="phone_no" required />
	  <label class="label"> Email</label><input type="email"name="email"required />
	   <label class="label">Password</label><input type="password"name="pwd" required />
	   <label class="label">Re-Enter Password</label><input type="password"name="c_pwd" required />
    <button>Register</button>
	</form>
  </div>   
  </body>
</html>
	
</body>
</html>
