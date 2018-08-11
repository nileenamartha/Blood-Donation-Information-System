<?php
 session_start();
 if(isset($_SESSION['l_id']))
 {
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
<link rel="stylesheet" href="style.css">
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
    
        .box    {
           padding: 19px;
           margin-top: -8px;
           margin-left: 29px;  
                }

    </style>
</head>
<body>
    <h1>Wikipedia for searching </h1>
    <div class="box">
    <input type="text" name="searchTerm" value="">
    <input type="button" id="search" value="search">
    <div id="outputWiki"></div>
    <div id="outputYoutube"></div>
    <script>
        window.onload = function () {
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
</html>
</div>
</section>
