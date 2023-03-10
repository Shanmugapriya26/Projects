<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "sahodb";

// CREATE CONNECTION
$conn = new mysqli($servername,
  $username, $password, $databasename);
  $query = "SELECT * FROM `sahotable` where firstname='Sasireka';";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
?> 
<!DOCTYPE html>
<html>
  <head>
    <title>Human Library Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 400px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #04AA6D;}
.bar-3 {width: 10%; height: 18px; background-color: #04AA6D;}
.bar-2 {width: 4%; height: 18px; background-color: #04AA6D;}
.bar-1 {width: 15%; height: 18px; background-color: #04AA6D;}
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
      .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
  
}

.previous {
  margin-top: 10px;
  margin-left: 280px;
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #101010;
  color: white;
}

/* Make sure that padding behaves as expected */
* {box-sizing:border-box}

/* Container for skill bars */
.container {
  height:30px;
  width: 100%; /* Full width */
  background-color: #ddd; /* Grey background */
}

.skills {
  height:30px;
  text-align: right; /* Right-align text */
  padding-top: 10px; /* Add top padding */
  padding-bottom: 10px; /* Add bottom padding */
  color: white; /* White text color */
}

.html {width: 90%; background-color: #2196F3;} /* Green */
.css {width: 80%; background-color: #2196F3;} /* Blue */
.js {width: 65%; background-color: #2196F3;} /* Red */
.php {width: 60%; background-color: #2196F3;} /* Dark Grey */

  </style>
  <body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
  <img src="img_avatar2" alt="Name" style="width:100%">
  <?php 
  while($row = $result->fetch_assoc())
  {
  ?>
  <h1><?php echo $row['firstname'] ?></h1>
  <p class="title"><?php echo $row['ppin'] ?></p>
  <?php 
  }
  ?>
  <p>Organization</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p>
</div>
<br>
<span class="heading">Skills</span>
<hr style="border:3px solid #f1f1f1">
<p>HTML</p>
<div class="container">
  <div class="skills html">90%</div>
</div>

<p>CSS</p>
<div class="container">
  <div class="skills css">80%</div>
</div>

<p>JavaScript</p>
<div class="container">
  <div class="skills js">65%</div>
</div>

<p>PHP</p>
<div class="container">
  <div class="skills php">60%</div>
</div>
<br>
<br>
<br>
<span class="heading">Saho Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
<pre>

</pre>
<a href="http://localhost/saho/Booking.php" class="next">&raquo;Book</a>

  </body>
  <script src="jquery.counterup.min.js"></script>  
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>  
<script>  
jQuery(document).ready(function( $ )  
{  
    $('.counter').counterUp({  
        delay: 10,  
    time: 1000  
    });  
});  
</script> 
</html>