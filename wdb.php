<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="stylewdb.css">
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
<link rel="stylesheet" href="styleregister.css">
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
<section class="homeTop" id="top">
<div id="text">
<p>
<span style="font-family:Lucida Calligraphy;">You dont need a special reason to give blood.</span>
<span style="font-family:Lucida Calligraphy; font-size:30px;">You just need your own reason.</span>
<ul style="padding-top: 1px; font-family: Adobe Devanagari; margin-left: 114px; list-style-type: circle; ">
<li>Some of us give blood because we were asked by a friend.</li>
<li>Some know that a family member or a friend might need blood some day.</li>
<li>Some believe it is the right thing we do.</li>
</ul>
<span style="font-family:Lucida Calligraphy;">
Whatever your reason, the need is constant and your contribution is important for a healthy and reliable blood supply.  And  you'll feel good knowing you've helped change a life.</span>
</p>
</div>
<div id="img">
<img src="a.jpeg">
</div>
</section>
