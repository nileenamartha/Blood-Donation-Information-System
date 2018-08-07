<?php
	// Authorisation details.
	$username = "nileenamv@gmail.com";
	$hash ="bdbb469355e2139b95b6e545bee29c6d4027d7e19d482f0782aed18fe75350f6";
	// Config variables. Consult https:// txtlocal.co.uk/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "Lifestream"; // This is who the message appears to be from.
	$numbers = "0894591068"; // A single number or a comma-seperated list of numbers
	$message = "Welcome to Our Website of LifeStream Blood donation  Now you are sucsessfully Registered as Official Donor.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
?>
