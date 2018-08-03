<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:index.php"); 
	  }
?>
<!DOCTYPE html>
<html>
<head>
<title>LifeStream Blood Donation</title>
<link rel="stylesheet" href="styleeditdonor.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
 
   <li><a href="logout.php">Logout</a></li>
  <li><a href="login.php">MyProfile</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
</div>
  <body>
<div class="title">
  <h2>Edit Profile</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
  <!div class="form">
   <?php
  $conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
  $sql="select * from donor_register where l_id='$lid'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
	  while($data=mysqli_fetch_array($result))
	  {
  ?>
    <form style="margin-top: 13px;" method="post" action="">
	  <label class="label"> Full Name</label><input type="text" name="name" value='<?php echo $data["name"]?>' required/>
	   <label class="label">Age</label><input type="text"name="age" value=<?php echo $data["age"]?> required/>
	     <label class="label">Bloodgroup</label>
	     <select id="select" name="bloodgroup">
           <option selected disabled></option>
	       <option <?php if($data["blood_group"]=='A+ve') {?> selected="selected" <?php }?> >A+ve</option>
           <option <?php if($data["blood_group"]=='A-ve') {?> selected="selected" <?php }?> >A-ve</option>
           <option <?php if($data["blood_group"]=='B+ve') {?> selected="selected" <?php }?> >B+ve</option>
           <option <?php if($data["blood_group"]=='B-ve') {?> selected="selected" <?php }?> >B-ve</option>
           <option <?php if($data["blood_group"]=='O+ve') {?> selected="selected" <?php }?> >O+ve</option>
           <option <?php if($data["blood_group"]=='O-ve') {?> selected="selected" <?php }?> >O-ve</option>
           <option <?php if($data["blood_group"]=='AB+ve') {?> selected="selected" <?php }?> >AB+ve</option>
           <option <?php if($data["blood_group"]=='AB-ve') {?> selected="selected" <?php }?> >AB-ve</option>
        </select> 
        <label class="label">Gender</label>
        <select id="select" name="gender">
          <option disabled selected></option>
          <option <?php if($data["gender"]=='Male') {?> selected="selected" <?php }?> >Male</option>
          <option <?php if($data["gender"]=='Female') {?> selected="selected" <?php }?> >Female</option>
        </select> 
	     <label class="label">Date of Birth</label>
	     <input type="text" name="dob" value=<?php echo $data["dob"]?> />
	     <label class="label">Weight</label>
	     <input type="text"name="weight" value=<?php echo $data["weight"]?> />
	     <label class="label">Address</label>
	     <input type="text"name="address"value=<?php echo $data["address"]?> />
	     <label class="label">Phone Number</label>
	     <input type="number"name="phone_no" value=<?php echo $data["phone_no"]?> />
	     <label class="label">State
         </label>
        <select id="select" name="state">
          <option <?php if($data["state"]=='Kerala') {?> selected="selected" <?php }?> >Kerala</option>
        </select>
      </p>
      <p>   
        <label class="label">District</label>
        <select id="select" name="district">
          <option <?php if($data["district"]=='Wayanad') {?> selected="selected" <?php }?> >Wayanad </option>       
          </select> 
        <label class="label">Location</label>
	     <select id="select" name="location">
           <option selected disabled></option>
	       <option <?php if($data["location"]=='ambalavayal') {?> selected="selected" <?php }?> >ambalavayal</option>
          <option <?php if($data["location"]=='idavaka') {?> selected="selected" <?php }?> >idavaka</option>
          <option <?php if($data["location"]=='kaniyambatta') {?> selected="selected" <?php }?> >kaniyambatta</option>
          <option <?php if($data["location"]=='kottathara') {?> selected="selected" <?php }?> >kottathara</option>
          <option <?php if($data["location"]=='mananthavady') {?> selected="selected" <?php }?> >mananthavady</option>
          <option <?php if($data["location"]=='meenangadi') {?> selected="selected" <?php }?> >meenangadi</option>
          <option <?php if($data["location"]=='mullankolli') {?> selected="selected" <?php }?> >mullankolli</option>
          <option <?php if($data["location"]=='muttil') {?> selected="selected" <?php }?> >muttil</option>
          <option <?php if($data["location"]=='nenmani') {?> selected="selected" <?php }?> >nenmani</option>
          <option <?php if($data["location"]=='padinjarathara') {?> selected="selected" <?php }?> >padinjarathara</option>
          <option <?php if($data["location"]=='pozhuthana') {?> selected="selected" <?php }?> >pozhuthana</option>
          <option <?php if($data["location"]=='pulpalli') {?> selected="selected" <?php }?> >pulpalli</option>
          <option <?php if($data["location"]=='sulthan batheri') {?> selected="selected" <?php }?> >sulthan batheri</option>
          <option <?php if($data["location"]=='thavinhal') {?> selected="selected" <?php }?> >thavinhal</option>
          <option <?php if($data["location"]=='thariyod') {?> selected="selected" <?php }?> >thariyod</option>
          <option <?php if($data["location"]=='thirunelli') {?> selected="selected" <?php }?> >thirunelli</option>
          <option <?php if($data["location"]=='vellamunda') {?> selected="selected" <?php }?> >vellamunda</option>
          <option <?php if($data["location"]=='vythiri') {?> selected="selected" <?php }?> >vythiri</option>
        </select> 
        <input type="text" name="location" value=<?php echo $data["location"]?> />
        <label class="label">Status</label>
        <select id="select" name="status"value=<?php echo $data["status"]?> />
        <option selected disabled></option>
          <option <?php if($data["status"]=='Available') {?> selected="selected" <?php }?> >Available</option>
          <option <?php if($data["status"]=='Unavailable') {?> selected="selected" <?php }?> >Unavailable</option>
        </select>
        <label class="label"><a href="change_password_donor.php">Click here to Change Password</a></label>
      <button name="update">Update</button>
    </form>
    <?php
	  }
  }
  if(isset($_POST["update"]))
  {
		$name=$_POST['name'];
		$age=$_POST['age'];
		$dob=$_POST['dob'];
		$weight=$_POST['weight'];
		$address=$_POST['address'];
		$phone_no=$_POST['phone_no'];
		$status=$_POST['status'];
		$bloodgroup=$_POST['bloodgroup'];
		$gender=$_POST['gender'];
		$state=$_POST['state'];
		$district=$_POST['district'];
		$location=$_POST['location'];
		$conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
		$sql="UPDATE donor_register SET name='$name',age='$age',blood_group='$bloodgroup',gender='$gender',dob='$dob',weight='$weight',address='$address',phone_no='$phone_no',state='$state',district='$district',location='$location',status='$status' WHERE l_id='$lid'";
	$query=mysqli_query($conn,$sql);
  	if($query){
		?>
		<script>
			alert("Successfully Updated");
			window.location.href="edit.php";
		</script>
		<?php }
  }
?>
      
  </div>   
  </body>
</html>
	
</body>
</html>
