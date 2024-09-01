<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:logadmin.php");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
	<link rel="icon" type="image/x-icon" href="images/favicon/favicon.ico">
  <style>
		body {
    font-family: Arial, sans-serif;
    background-color: mediumslateblue;
}
	/* Reset some default styles */
body, html {
    margin: 0;
	padding: 0;}
	/* Style the header with a grey background and some padding */
/* Style the header */
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  position: fixed; /* Set the header to be fixed */
  width: 100%; /* Make the header span the full width */
  z-index: 1000; /* Ensure the header stays on top of other content */
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link */
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add padding to the content to prevent it from being covered by the fixed header */
.content {
  padding-top: 25px; /* Adjust the value according to the height of your header */
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
	
	/* The side navigation menu */
.sidebar {
  margin-top: 80px; /* Adjust according to your header's height */
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: calc(100% - 80px); /* Adjust according to your header's height */
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content */
.content {
  margin-left: 220px; /* Adjust according to your sidebar's width */
  padding: 16px;
}

div.content {
  margin-left: 184px;
  padding: 1px 16px;
  height: 1000px;
}
	{box-sizing:border-box}


html {
  box-sizing: border-box;
	
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  width: 101%;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: red;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.float-end {
  float: right;

}
.user {
  padding: 18px;
}
.logimg {
  height: 0.5cm;
}
/* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  min-width: 200px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>

	<head>
	</head>
<body>
<div class="header">
<a href="adminhome.php" class="logo"><img src="images/favicon/favicon.ico" class="logimg">  Learn at home Admin</a>
  <div>
   
  <?php if(isset($_SESSION['username'])){?>
<div class="float-end"><a href="adminlogout.php"><i class="fa fa-sign-out"></i>Logout</a></div>

<?php
}
else{
  ?>
  <a id="login" href="adminlogin.php"><i class="fa fa-sign-in"></i>Login</a>
<?php } ?>
<div class="float-end"><a href="aboutAdmin.php">About us</a></div>
  </div>
</div>
	<!-- The sidebar -->
  <div class="sidebar">
  <div class="dropdown">
 <button class="dropbtn">Learning Resources</button>
 <div class="dropdown-content">
  
<a href="manageUsers.php">Manage Users</a>
  <a href="s1admin.php">S1 Resources</a>
  <a href="s2admin.php">S2 Resources</a>
  <a href="s3admin.php">S3 Resources</a>
  <a href="s4admin.php">S4 Resources</a>
  <a href="s5admin.php">S5 Resources</a>
  <a href="s6admin.php">S6 Resources</a>
  <a href="adminvideo.php">Video</a>
  </div>
  </div>
</div>

<!-- Page content -->
	
<div class="content">

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Learn at home
   </nav>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Learn at home is a platform that aims at fighting education inequalities at secondary level of education through providing learning resources to students who do not have access to them. </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/jamiru.jpg" alt="Jamiru" style="width:100%">
      <div class="container">
        <h2>Ntensibe Jamiru</h2>
        <p class="title">CEO & Founder</p>
        <p>I love backend development and i have a 2years experiece</p>
        <p>jamiruntensibe@gmail.com</p>
        <p><button class="button">+256 758068360</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/kirabo.jpg" alt="kirabo" style="width:100%">
      <div class="container">
        <h2>Kirabo Ramrat</h2>
        <p class="title">Programmer</p>
        <p>I have a 10years experience in C++, HTML, PHP & Pythyon</p>
        <p>kiraboramrat@gmail.com.com</p>
        <p><button class="button">+256 762496525</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/moses.jpg" alt="moses" style="width:100%">
      <div class="container">
        <h2>Younger Moses</h2>
        <p class="title">Designer</p>
        <p>Graduated from Africa Renewal University & loves frontend designing</p>
        <p>youngermoses@gmail.com</p>
        <p><button class="button">+256 771 695843</button></p>
      </div>
    </div>
  </div>
</div>
  
</div>

<div class="about-section">
  <p>Learn at home is a platform aims at fighting education inequalities at secondary level of education through providing learning resources to students who do not have access to them. </p>
</div>

</div>
</body>
</html>