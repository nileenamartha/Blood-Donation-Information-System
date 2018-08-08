<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="stylewdb.css">
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
<section class="homeTop" id="top">
<div id="text">
<p>
<span style="font-family:Lucida Calligraphy;">You dont need a special reason to give blood.</span>
<span style="font-family:Lucida Calligraphy; font-size:30px;">You just need your own reason.</span>
<ul style="padding-top: 1px; font-family: Adobe Devanagari; margin-left: 114px; list-style-type: circle; ">
<li>Some of us give blood because we were asked by a friend.</li>
<li>Some know that a family member or a friend might need blood some day.</li>
<li>Some believe it is the right thing we do.</li>
</ul>
<span style="font-family:Lucida Calligraphy;">
Whatever your reason, the need is constant and your contribution is important for a healthy and reliable blood supply.  And  you'll feel good knowing you've helped change a life.</span>
</p>
</div>
<div id="img">
<img src="a.jpeg">
</div>
</section>
