
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="theme-color" content="#232629" />
	<title>Untitled Document</title>


	<!-- Main -->
	<link href='<?php echo mix('css/app.css', '/Diamond_Website'); ?>' rel='stylesheet' type='text/css'>
	<!-- Javascript -->
	<script src='<?php echo mix('js/app.js', '/Diamond_Website'); ?>' type='text/javascript'></script>


</head>

<body>
 <div class="container-fluid header">
    <div class="row blw_header no-gutters">
      <div class="col-lg-12 c_header">
        <nav class="navbar navbar-dark bg-dark">
          <span class="navbar-brand">
        	  <img src="src/images/logo.png" alt="">
          </span>
          <div class="list" id="list-hide">
            <ul>
             <li><img class="icons_image" src="src\images\icons\fb1.png" alt=""></li>
             <li><img class="icons_image" src="src\images\icons\instagram.png" alt=""></li>
             <li><img class="icons_image" src="src\images\icons\twitter.png" alt=""></li>
            </ul>
          </div>
           <div class="list" id="list-hide">
            <ul>
             <li></li>
            </ul>
          </div>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Home</a>
            <a href="#">
              <ul class="categories">Our Work
                <li>Film & Episodic</li>
                <li>Music Videos</li>
                <li>Social Content</li>
              </ul>
            </a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Our Social</a>
            <a href="#">
              <ul class="social_media">
                <li><img class="icons_image" src="src\images\icons\fb1.png" alt=""></li>
                <li><img class="icons_image" src="src\images\icons\instagram.png" alt=""></li>
                <li><img class="icons_image" src="src\images\icons\twitter.png" alt=""></li>
              </ul>
            </a>
            

          </div>
          <div id="main" style="outline-color: white">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <script>
      function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
    }
  </script>