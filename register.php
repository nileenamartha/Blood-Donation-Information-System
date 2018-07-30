<?php
 session_start();
 if(isset($_SESSION['l_id']))
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
  <body>
<div class="title">
  <h2>REGISTER</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
  <!div class="form">
    <form style="margin-top: 13px;" method="post" action="action_donor_register.php">
	  <label class="label"> Full Name</label><input type="text" name="name" required/>
	   <label class="label">Age</label><input type="text"name="age" required/>
	     <label class="label">Bloodgroup</label>
	     <select id="select" name="bloodgroup">
           <option selected disabled></option>
	       <option>A+ve</option>
           <option>A-ve</option>
           <option>B+ve</option>
           <option>B-ve</option>
           <option>O+ve</option>
           <option>O-ve</option>
           <option>AB+ve</option>
           <option>AB-ve</option>
        </select> 
        <label class="label">Gender</label>
        <select id="select" name="gender">
          <option disabled selected></option>
          <option>Male</option>
          <option>Female</option>
        </select> 
	     <label class="label">Date of Birth</label>
	     <input type="date" name="dob"/>
	     <label class="label">Weight</label>
	     <input type="text"name="weight"/>
	     <label class="label">Address</label>
	     <input type="text"name="address"/>
	     <label class="label">Phone Number</label>
	     <input type="number"name="phone_no"/>
	     <label class="label">State
         </label>
        <select id="select" name="state">
          <option selected="selected">Kerala</option>
        </select>
      </p>
      <p>   
        <label class="label">District</label>
        <select id="select" name="district">
          <option selected="selected">Wayanad </option>
          </select> 
        <label class="label">Location</label>
        <select id="select" name="location">
        <option disabled selected></option>
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
         </select>
        <label class="label">Status</label>
        <select id="select" name="status">
        <option selected disabled></option>
          <option>Available</option>
          <option>Unavailable</option>
        </select>
	   <label class="label"> Email</label><input type="email" name="email" required/>
	   <label class="label">Password</label><input type="password" name="pwd" id="password" required/>
	   <label class="label">Re-Enter Password</label><input type="password" name="cpwd" id="confirm_password" required/>
	   <div id="author"><p>
	     <input type="checkbox" style="left: 31px; top: 1220px; width: 27px; height: 15px; margin-right: 50px; margin-left: 0px; position: absolute;" required >
	     I authorise the website to display my telephone number & e-mail address so that the needy could contact me, as and when there is an emergency.</p>
       </div>
      <button>Register</button>
    </form>
  </div>   
  </body>
</html>
	
</body>
</html>
