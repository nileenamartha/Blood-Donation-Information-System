<?php
 session_start();
 if(isset($_SESSION['l_id']))
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
	<li><a href="../logout/logout.php">Logout</a></li>
	<li><a href="../feedback/feedback.php">FeedBack</a></li>
	<li><a href="../why_donate_blood/wdb.php">Why Donate Blood</a></li>
	<li><a href="../home/home.php">Home</a></li>
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
  <body>
<div class="title">
  <h2>feedBack</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
    <form style="margin-top: 13px;" method="post" action="action_send.php">
	  <label class="label"> Name</label><input type="text"name="name" required />
	  <label class="label">Email</label><input type="email"name="email" required />
	  <label class="label"> Location</label><input type="text"name="location"required />
	   <label class="label">Suggestion</label>
       <textarea id="select" name="suggestion">
       </textarea>
    <button>Send</button>
	</form>
  </div>   
  </body>
</html>
	
</body>
</html>
