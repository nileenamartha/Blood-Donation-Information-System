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
<link rel="stylesheet" href="styleeditacceptor.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
 <li><a href="logout.php">Logout</a></li>
  <li><a href="Login_Acceptor.php">MyProfile</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
</div>
  <body>
<div class="title">
  <h2>EDIT PROFILE</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
    <form style="margin-top: 13px;" method="post">
		<?php
      $conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
      $sql="select * from acceptor_register where l_id='$lid'";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
          while($data=mysqli_fetch_array($result))
          {
      ?>
	  <label class="label"> Full Name</label><input type="text"  name="name" value='<?php echo $data["name"]?> ' />
	  <label class="label"> Address</label><input type="text" name="address" value=<?php echo $data["address"]?>  />
	  <label class="label">Phone Number</label><input type="number" name="phone_no" value=<?php echo $data["phone_no"]?>  />
	  <label class="label"><a href="change_password/change_password.php">Click here to Change Password</a></label>
    <button name="submit">Save</button>
    </form>
     <?php
	  }
  }
  if(isset($_POST["submit"]))
  {
 	 	$name=$_POST['name'];
		$address=$_POST['address'];
		$phone_no=$_POST['phone_no'];
		$conn = mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
		$sql="UPDATE acceptor_register SET name='$name',address='$address',phone_no='$phone_no' WHERE l_id='$lid'";
  
	$query=mysqli_query($conn,$sql);
	if($query)
	{
	$sql1="UPDATE login SET phone_no='$phone_no'";
	$query1=mysqli_query($conn,$sql1);
  	if($query1){
		
		?>
		<script>
			alert("Successfully Updated");
			window.location.href="edit_acceptor.php";
		</script>
		<?php }
	}
  }
  ?>
  </div>   
  </body>
</html>
	
</body>
</html>
