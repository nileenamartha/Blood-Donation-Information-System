<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>LifeStream Blood Donation</title>
	<link rel="stylesheet" href="styleindex.css">
	</head>
	<body>
	<div id="navBar">
	<h2>LifeStream</h2>
	<ul><li><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=eddy_ayim@gmail.com&item_name=Life+Stream+Blood+Bank&item_number=Fall+Cleanup+Campaign&amount=25%2e00&currency_code=USD">Donate With Paypal</a></li>
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
<title>LifeStream Blood Donation</title>
<link rel="stylesheet" href="styleindex.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
	<li><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=eddy_ayim@gmail.com&item_name=Life+Stream+Blood+Bank&item_number=Fall+Cleanup+Campaign&amount=25%2e00&currency_code=USD">Donate With Paypal</a></li>
  <li><a href="feedback.php">FeedBack</a></li>
  <li><a href="wdb.php">Why Donate Blood</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
</div>
  <?php
  }
  ?>
<section class="homeTop" id="top">

<!-- Form Module-->
<div id="form-module">
  <!div class="form">
  <h2>Login</h2>
    <form method="post" action="action_login.php">
	  <input type="email" placeholder="Email ID" name="email"/>
      <input type="password" placeholder="Password"name="password"/>
      <button>Login</button>
    </form>
    <a href="forgot.php" style="text-decoration:none; color:black">Forgot Password</a>
  </div>
 <!--Registration-->
 <div id="reg">
 <button> <h2>Become a <br>blood donor<br></h2><a href="register.php">Register Now</a></button>

 </div>
 <div id="reg2">
 <button> <h2>In need of Blood?<br>Post Your Request<br></h2><a href="acceptor_reg.php">Register Now</a></button>
 </div>
<!--DonorSearch-->
<div id="DonorSearch">
<h5>Find a Donor</h5>
<form methode="get" action="search_result.php">
<select name="bloodgroup" required >
	<option value=""disabled selected><span>Blood Group</span></option>
   <option value="A+ve">A+ve</option>
   <option value="A-ve">A-ve</option>
   <option value="B+ve">B+ve</option>
   <option value="B-ve">B-ve</option>
   <option value="O+ve">O+ve</option>
   <option value="O-ve">O-ve</option>
   <option value="AB+ve">AB+ve</option>
   <option value="AB-ve">AB-ve</option>
</select><br>
<select style="padding-bottom: 10px; margin-bottom: 19px;" name="state" required >
	<option value="kerala" selected="selected">Kerala</option>
</select>
<select style="padding-bottom: 10px; margin-bottom: 19px;" name="district" required >
    <option value="wayanad" selected="selected">Wayanad</option>
</select>
<select id="select" name="location" required >
<option value=""disabled selected><span>Location</span></option>
<option>ambalavayal</option>
         <option>idavaka</option>
         <option>kaniyambatta</option>
         <option>kottathara</option>
         <option>mananthavady</option>
         <option>meenangadi</option>
         <option>mullankolli</option>
         <option>muttil</option>
         <option>nenmani</option>
         <option>padinjarathara</option>
         <option>pozhuthana</option>
         <option>pulpalli</option>
         <option>sulthan batheri</option>
         <option>thavinhal</option>
         <option>thariyod</option>
         <option>thirunelli</option>
         <option>vellamunda</option>
         <option>vythiri</option>
</select><br>
<button name="find">Find</button>
</form>
 </div>
</section>	
<section class="middle" id="mid">
<div id="text1">
<h1>EVERY <span style="font-size:50px;">2</span> SECONDS,<br><span>SOMEONE</span> NEEDS <span>BLOOD</span>.<br><br><span>TAKE A BREAK</span><br>AND DONATE BLOOD.</h1>
</div>
<div id="img">
<img src="blood2.png">
</div>
</section>
</body>
</html>
