
<html>
<body>
<div id="header">
<h2>Nitte Meenakshi Institute Of Technology </h2>
</div>
<link rel="stylesheet" type="text/css" href="style3.css">
<form>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
figure {
  float: left;
  width: 10%;
  text-align: center;
  font-style: italic;
  font-size: smaller;
  text-indent: 0;

}

.navbar a {
  float: right;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("nmit.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: red; /* Fallback color */
  background-color: grey; /* Black w/opacity/see-through */
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align:center;
}



</style>
<body>
<?php 
session_start();

if($_SESSION['status']!='active')
{header("location:home.php");
}
?>
 <div class="navbar">

 
  <a href="out.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<div class="bg-image"></div>

<div class="bg-text">

<figure>
  <p><a href="register.php" > <img src="admin.jpg"
    width="80" height="80"
    alt=""><h3>Admin Registration</h3> </a>
  
</figure>
<figure>
  <p><a href="studentform.php" > <a href="studentform.php" > <img src="student.png"
    width="80" height="80"
    alt="Eiffel tower"><h4>Student Registeration </h4> </a>

</figure>
<figure>
  <p><a href="report1.php" > <img src="report.png"
    width="80" height="80"
    alt="Eiffel tower"><h4>Report</h4> </a>
  
</figure>
<figure>
  <p><a href="report.php" > <img src="graph.jpg"
    width="80" height="80"
    alt="Eiffel tower"><h2>Statistics </h2> </a>
 
</figure>
<figure>
  <p><a href="update.php" > <img src="student.png"
    width="80" height="80"
    alt="Eiffel tower"><h2>Update </h2> </a>
 
</figure>

</ol>

</ol>

</form>

</div>

</html>
</body>




