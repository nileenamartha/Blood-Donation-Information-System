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
	<ul>
	<li><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=eddy_ayim@gmail.com&item_name=Life+Stream+Blood+Bank&item_number=Fall+Cleanup+Campaign&amount=25%2e00&currency_code=USD">Donate With Paypal</a></li>
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
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AJAX APIs</title>
    <style>
        .dataOutput {
            padding: 10px;
            border: 1px solid #eee;
        }
        
        .wrap {
            width: 100%;
            position: relative;
        }
        
        .panel {
            width: 25%;
            display: inline-block;
            height: 300px;
            overflow: hidden;
        }
        
        .panel img {
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }
        
        .panel .content {
            width: 100%;
            font-size: 0.7em;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.6);
            color: white;
            position: absolute;
            padding: 10px;
            left: 0;
            z-index: 100;
        }
    </style>
</head>
<body>
<h1>AJAX Information API Application</h1>
<title>AJAX APIs</title>
    <input type="text" name="searchTerm" value="">
    <input type="button" id="search" value="search">
    <div id="outputWiki"></div>
    <script>
        window.onload=function()
	{
            document.getElementById('search').addEventListener('click', showResults)
        }
function showResults() 
	    {
            Var searchTerm = document.querySelector('input[name="searchTerm"]').value
            var url = 'https://en.wikipedia.org/w/api.php?format=json&action=opensearch&origin=*&search=' + searchTerm;
            var outputWiki = document.querySelector('#outputWiki');
              outputWiki.innerHTML = "<h2>Search Term " + searchTerm + "<h2>";
            ajaxJS(url, function (response) 
		   {
                console.log(response)
                for (var x in response) 
		{
                    var $holder = typeof response[x] == 'string' ? response[x] : response[x][0];
                    outputWiki.innerHTML += '<div class="dataOutput">' + holder + '</div>';
                })
	    }
function showResults()
		    {
            var searchTerm = document.querySelector('input[name="searchTerm"]').value
            var url = 'https://en.wikipedia.org/w/api.php?format=json&action=opensearch&origin=*&search=' + searchTerm;
            var outputWiki = document.querySelector('#outputWiki');
            outputWiki.innerHTML = "<h2>Search Term " + searchTerm + "<h2>";
            ajaxJS(url, function (response) 
		   {
                console.log(response)
                for (var $x in response) 
		{
                     var $holder = typeof response[x] == 'string' ? response[x] : response[x][0];
                     outputWiki.innerHTML += '<div class="dataOutput">' + holder + '</div>';
                })
	    }
		   }
		   
 xhr.open('GET', url, true)
            xhr.send();
        }
    </script>
</body>
</html>		    	
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
