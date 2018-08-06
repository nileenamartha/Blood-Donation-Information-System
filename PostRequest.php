<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:home.php"); 
	  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylepostrequest.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
 <li><a href="logout.php">Logout</a></li>
  <li><a href="Login_Acceptor.php">MyProfile</a></li>
  <li><a href="home.php">Home</a></li>
</ul>
</div>
  <body>
<div class="title">
  <h2>Post Request</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
    <form style="margin-top: 13px;" method="post" action="action_post_request.php" >
	<h2>PATIENT DETAILS</h2>
       <label class="label"> Full Name</label>
       <input type="text" name="name" required />
	   <label class="label">Blood Group Needed</label> 					        
       <select id="select" name="bloodgroup" required>
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
      <select id="select" name="gender" required>
        <option selected disabled></option>
          <option>Male</option>
          <option>Female</option>
        </select> 
         <label class="label">Age</label>
         <input type="number"name="age" required/>
	<label class="label">State
      </label>
      <select id="select" name="state" required>
        <option disabled selected></option>
          <option selected="selected">Kerala</option>
        </select>  
	  <label class="label">District</label>
      <select id="select" name="district" required>
        <option disabled selected></option>
          <option selected="selected" >Wayanad </option>         
          </select> 
	<label class="label">Location</label>
        <select id="select" name="location" required>
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
    <label class="label">When you need blood</label><input type="date"name="date"required/>
	<!--label class="label1"><input type="checkbox" name="notify[]" id="ch_box" style="
    top: 6px;" value="html"/>Notification<br><br>
	<label class="label1"><input type="checkbox" name="notify[]" id="ch_box"  value="sms"/>SMS<-->
	
    <button>Post</button>
	</form>
  </div>   
  </body>
</html>	
</body>
</html>
