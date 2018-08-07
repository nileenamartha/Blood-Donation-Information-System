<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$mobileNumber = '';
$conn = mysqli_connect('localhost','root','','blood_info') or die (mysqli_error()); // give connection credentials here

if($conn){
$query = "select phone_no from notification"; // change table name and column name accordingly.

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
         $mobileNumber .= $row['mobile_number'].',';
   }
}

}
$mobileNumber = substr($mobileNumber,0,strlen($mobileNumber)-1); // now you have all mobile numbers in , seperated form in this variable
