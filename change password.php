<?php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:../../home/home.php"); 
	  }
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
 <li><a href="../../logout/logout.php">Logout</a></li>
  <li><a href="../../acceptor_login/Login_Acceptor.php">MyProfile</a></li>
  <li><a href="../../home/home.php">Home</a></li>
</ul>
</div>
  <body>
<div class="title">
  <h2>EDIT PROFILE</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
<form style="margin-top: 13px;" method="post">
<label class="label">Current Password</label><input type="password" name="current" />
<label class="label">New Password</label><input type="password" name="new" />
<label class="label">Confirm Password</label><input type="password" name="confirm"/>
 <button name="submit">Update</button>
 </form>
 <?php
  if(isset($_POST["submit"]))
  {
	  $current=$_POST["current"];
	  $new=$_POST["new"];
	  $confirm=$_POST["confirm"];
	  $conn = mysqli_connect("localhost", "root","","blood_info");
	  $sql="select password from login where id='$lid'";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  {
		  while($data=mysqli_fetch_array($result))
		  {
			  if($data["password"]==$current)
			  {
				  if($new==$confirm)
				  {
	 					$sql="update login set password='$new' where id='$lid'";
						 $result=mysqli_query($conn,$sql);
						 if($result)
						 {
							 ?>
							<script>
                            alert("Password Changed Successfully!")
                            window.location="../edit_acceptor.php"
                            </script>
                            <?php
						 }
				  }
				  else
				  {
					   ?>
						<script>
                        alert("Password doesn't match")
                        window.location="change_password.php"
                        </script>
                        <?php
				  }
			  }
			  else
			  {
				  ?>
					<script>
                    alert("Password incorrect")
                   window.location="change_password.php"
                    </script>
                    <?php
			  }
		  }
	  }
  }
 ?>
  </div>   
  </body>
</html>
	
</body>
</html>
