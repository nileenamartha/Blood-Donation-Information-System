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
<!DOCTYPE html>
<head>
<body>
    <h1>AJAX Information API Application</h1>
    <input type="text" name="searchTerm" value="">
    <input type="button" id="search" value="search">
    <div id="outputWiki"></div>
    <div id="outputYoutube"></div>
    <script>
        window.onload = function ()
{
            document.getElementById('search').addEventListener('click', showResults)
        }
        function showResults() {
            var searchTerm = document.querySelector('input[name="searchTerm"]').value
            var url = 'https://en.wikipedia.org/w/api.php?format=json&action=opensearch&origin=*&search=' + searchTerm;
            var outputWiki = document.querySelector('#outputWiki');
            var outputYoutube = document.querySelector('#outputYoutube');
            outputWiki.innerHTML = "<h2>Search Term " + searchTerm + "<h2>";
            outputYoutube.innerHTML = "<h2>Videos of " + searchTerm + "<h2>";
            ajaxJS(url, function (response) {
                console.log(response)
                for (var x in response) {
                    var holder = typeof response[x] == 'string' ? response[x] : response[x][0];
                    outputWiki.innerHTML += '<div class="dataOutput">' + holder + '</div>';
                }
            })
            var url1 = 'https://www.googleapis.com/youtube/v3/search/?part=snippet&key=AIzaSyDiGv9TtXTjP-Ykg4FAq9E6JxCpm1jqmE4&q=' + searchTerm + '&maxResults=4';
           // var url1 = 'https://www.googleapis.com/youtube/v3/search/?format=json&action=opensearch&origin=part=snippet&key=AIzaSyBAZCjdBYLM_hx30TDOr3vBkGx5rLt3Dg4&q=student&maxResults=4'
            ajaxJS(url1, function (data) {
                console.log(data)
                for (var x in data.items) {
                    var title = data.items[x].snippet.title;
                    var desc = data.items[x].snippet.description;
                    var thumb = data.items[x].snippet.thumbnails.default.url;
                    var videoID = data.items[x].id.videoId;
                    outputYoutube.innerHTML += '<div class="panel"><div class="wrap"><div class="content">' + title + '</div><a href="https://youtu.be/' + videoID + '" target="_blank"><img src="' + thumb + '" alt="' + title + '"></a></div></div>'
                }
            })
        }
        function ajaxJS(url, callback) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    callback(JSON.parse(xhr.responseText))
                }
            }
            xhr.open('GET', url, true)
            xhr.send();
        }
    </script>
</body>
</head>	    
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
