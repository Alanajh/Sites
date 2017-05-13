<?php

$username = "root";
$password = "root";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

?>


<!DOCTYPE>
<html>

<title> Alana Harmon - Software Developer</title>
<head> <link rel="stylesheet" type="text/css" href="mySiteFoundation.css"></head>

<body>
	  <div class="row">
  <div class="large-12 columns">
 
     
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
           
          <li class="name">
            <h1>
              <a href="#">
                Alana Harmon - Software Developer
              </a>
            </h1>
          </li>
    
        </ul>
        <section class="top-bar-section">
          <ul class="left">
            <li><a href="java.html">Java Applications</a></li>
            <li><a href="#">Java Games</a></li>
            <li><a href="Websites.php">Web pages</a></li>
          </ul>
 
          <ul class="right">
            <li class="search">
              <div class="searchbox">
              <form>
                <input type="search">
              </form>
            </div>
            </li>
 
            <li class="has-button">
              <a class="small button" href="#">Search</a>
            </li>
          </ul>
        </section>
      </nav> 
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">

    <div class="row">
      <div class="small-12 show-for-small"><br>
        <img src="me.jpg"/><br>
      </div>
    </div>
 
    </div>
  </div><br>
 

  <div class="row">
    <div class="large-12 columns">
      <div class="row"> 
        <div class="large-6 small-6 columns">
          <img src="me.jpeg" width="220"/>
          <h6 class="panel">Software Developer</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <div class="row">
        <div class="large-8 columns">
          <div class="panel radius">
 
          <div class="row">
          <div class="large-6 small-6 columns">
 
            <h4>About Me</h4><hr/>
            <p class="subheader">I am a software developer with experience in Java, C, C++, 
              Visual Basic, HTML, CSS, Javascript, Foundation 5, asp.net, php and Object-Oriented 
              concepts.  
            </p>
 
          <div class="show-for-small" align="center">
            <a href="#" class="small radius button">Contact</a><br>

          </div>
 
          </div class="bio">
          <div class="large-6 small-6 columns" class="bio" >
 
            <p>I also have scrum, agile and test-driven development experience. I am familiar with
              the application lifecycle.
          </p>
        </div>
 
        </div>
        </div>
        </div>
 
          <div class="large-4 columns hide-for-small">
 
          <h4>Get in Touch</h4><hr/>
          <a class="large button expand" href="#">Contact</a>
        </div>
      </div>
    </div>
  </div>
  <footer class="row">
    <div class="large-12 columns">
      <hr>
      <div class="row">
        <div class="large-6 columns" align="right">
          <p>Alana Harmon &copy Copyright 2014.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Projects</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
    
</body>
</html>