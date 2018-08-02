<?php
	  $conn=mysqli_connect("cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "ji76idbl7xrpwijd", "ktsq582xb1j7ssmu","jlrcv5u4hn6l67a6");
      session_start();
      $lid=$_SESSION["l_id"];
	  $nid=$_GET["na"];
	  $sql="select status from notification_donor_info where l_id='$lid' and n_id='$nid'";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
		{
			while($data=mysqli_fetch_array($result))
			{
				$status=$data['status'];
				if($status=='rejected')
				{
					?>
					<script>
					alert("Already rejected");
					window.location="notification.php";
					</script>
					<?php
				}
			}
		}
		
		else
		{
	  $sql="select * from donor_register where l_id='$lid'";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result))
		{
			while($data=mysqli_fetch_array($result))
			{
				$name=$data['name'];
				$bloodgroup=$data['blood_group'];
				$phone_no=$data['phone_no'];
				$email=$data['email'];
				$gender=$data['gender'];
				$state=$data['state'];
				$district=$data['district'];
				$location=$data['location'];
				
				$sql1="insert into notification_donor_info values(null,'$lid','$nid','$name','$bloodgroup','$phone_no','$email','$gender','$state','$district','$location',curdate(),'rejected')";
		$result1=mysqli_query($conn,$sql1);
			}
		}
		  if($result1)
			{
				$sql2="update notification set status='accepted' where id='$nid'";
				$result2=mysqli_query($conn,$sql2);
				?>
				<script>
				alert("Request successfully rejected");
				window.location="notification.php"
				</script>
				<?php
			}
		}
		
?>
