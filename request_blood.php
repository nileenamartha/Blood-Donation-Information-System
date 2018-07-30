<?php
session_start();
error_reporting(0);
include('admin/includes/config.php');
if(strlen($_SESSION['alogin'])==0){	
header('location:login.php');
} else {
if(isset($_POST['submit']))
  {
$name=$_POST['name'];
$bloodgroup=$_POST["bloodgroup"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$state=$_POST["state"];
$district=$_POST["district"];
$location=$_POST["location"];
$date=$_POST["date"];
$email=$_SESSION['alogin'];
$status=1;

$sqluser = "SELECT * from  login where email='$email'";
$queryuser = $dbh -> prepare($sqluser);
$queryuser->execute();
$resultsz=$query->fetchAll(PDO::FETCH_OBJ);
if($queryuser->rowCount() > 0)
{
$phonez = htmlentities($resultsz->phone_no);
}



$sql="INSERT INTO  notification(id,l_id,name,blood_group,phone_no,gender,age,state,district,location,date,notify,status,email) VALUES(null,'$lid','$name','$bloodgroup','$phone_no','$gender','$age','$state','$district','$location','$date',null,'pending','$email')";

$query = $dbh->prepare($sql);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your info submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Life Stream Blood Bank & Donor Management System | Request For Blood</title>
	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="admin/css/bootstrap-social.css">
	<link rel="stylesheet" href="admin/css/bootstrap-select.css">
	<link rel="stylesheet" href="admin/css/fileinput.min.css">
	<link rel="stylesheet" href="admin/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="admin/css/style.css">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>

<body>
	<?php include('admin/includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Request For Blood</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Blood Request Form</div>
									<div class="panel-body">
										<form method="post" name="donar" class="form-horizontal" onSubmit="return valid();">
										
											
  	        	   <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
											<div class="form-group">
												<label class="col-sm-4 control-label">Full Name</label>
												<div class="col-sm-8">
													<input type="text" name="name" class="form-control" id="name" required>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<label class="col-sm-4 control-label">Blood Group Needed</label>
												<div class="col-sm-8">
													<select name="bloodgroup" class="form-control" id="bloodgroup" required>
													<option value="" selected="selected"></option>
													<?php 
														$sql = "SELECT * from  tblbloodgroup ";
														$query = $dbh -> prepare($sql);
														$query->execute();
														$results=$query->fetchAll(PDO::FETCH_OBJ);
														$cnt=1;
														if($query->rowCount() > 0){
															foreach($results as $result){
													?> 
													
													<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
													<?php }} ?>
													</select>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<label class="col-sm-4 control-label">Gender</label>
												<div class="col-sm-8">
													<select name="gender" class="form-control" required>
														<option value="">Select</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select><?php echo $phonez . "Phone"; ?>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<label class="col-sm-4 control-label">Age</label>
												<div class="col-sm-8">
													<input type="text" name="age" class="form-control" id="age" required>
												</div>
											</div>
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-4 control-label">State</label>
												<div class="col-sm-8">
													<select id="select" name="state" class="form-control" id="state" required>
        											<option disabled selected></option>
          											<option selected="selected">Kerala</option>
        											</select> 
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											
											
											
											
											<div class="form-group">
												<label class="col-sm-4 control-label">District</label>
												<div class="col-sm-8">
													<select id="select" name="district" class="form-control" required>
        											<option disabled selected></option>
         											<option selected="selected" >Wayanad </option>         
     												</select>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<label class="col-sm-4 control-label">Location</label>
												<div class="col-sm-8">
													<select id="select" name="location" class="form-control" id="location" required>
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
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<label class="col-sm-4 control-label">When do you need the blood</label>
												<div class="col-sm-8">
													<input type="date"name="date" class="form-control" id="date" required/>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											
										
								
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
													<input type="submit" name="submit" class="btn btn-primary" value="Save Request" style="cursor:pointer">
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
						
					

					</div>
				</div>
				
			
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="admin/js/jquery.min.js"></script>
	<script src="admin/js/bootstrap-select.min.js"></script>
	<script src="admin/js/bootstrap.min.js"></script>
	<script src="admin/js/jquery.dataTables.min.js"></script>
	<script src="admin/js/dataTables.bootstrap.min.js"></script>
	<script src="admin/js/Chart.min.js"></script>
	<script src="adminjs/fileinput.js"></script>
	<script src="adminjs/chartData.js"></script>
	<script src="admin/js/main.js"></script>

</body>

</html>
<?php } ?>