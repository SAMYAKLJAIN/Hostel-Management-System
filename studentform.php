<!DOCTYPE html>

<html>
<head>
<style>
 .header {
  padding: 10px;

  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 20px;
}
#tb
{
border: 5px solid grey;
width:100%;
height:100%;
border-radius:2px;
margin:-180px auto;
background:#B0C4DE;


}
#fields
{
text-align:left;
}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
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

</style>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php 
session_start();

if($_SESSION['status']!='active')
{header("location:home.php");
}
?>

<table>
  <div class="header" >
  	<h1>Student Registeration</h1>
<p  id="fields"><h5> All Fields are Manadtory </h5></p>
  
<div class="navbar">

 <a href="out.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="home1.php"><i class="fa fa-fw fa-user"></i>Home</a>
</div>
</div>	
  <form method="post" action="sregister.php">
  <table cellspacing="15" cellpaddin="10" id="tb" align="left">
  <pre> 
  
  
  
  </pre>
 <tr> 

  	 
  	<td><label> Admission Number </label></td>
  	  <td><input type="text" name="adminno" value=""></td>
  	  <td><label> Name </label></td>
  	  <td><input type="text" name="name" value=""></td>
  	    	 <td><label> Father Name </label></td>
  	  <td><input type="text" name="fathername" value=""></td>
  </tr>
  	  
  
  	</tr>
  	<pre>
  	
  	</pre>
  	
  	<tr> 
  		 <td><label>Department  </label></td>
  	<td> <select name="dept">
    <option value="1">CSE</option>
    <option value="2">ISE</option>
    <option value="3">CIVIL</option>
    <option value="4">MECHANICAL</option>
  </select>
  </td>
	
  	
 <td><label> Semester </label></td>
  	  <td><input type="text" name="sem" value=""></td>

  	 
  	<td><label>Age</label></td>
  	  <td><input type="text" name="age" value=""></td>
  	  
<br>

  <tr>
    <td>Gender</td>
  	   <td><input type="text" name="gender" value=""></td>
  	
    	 <td><label>Hostel  </label></td>
  	<td> <select name="hostel">
    <option value="2">Kavery</option>
    <option value="1">Nandini</option>
    <option value="3">Soparinka</option>
    <option value="4">girl's hostel</option>
  </select>
  </td><td><label> Room Number </label></td>
  	  <td><input type="text" name="roomno" value=""></td></tr>
  	  </tr>
  	  <tr>
  	  <td>
  	  Birth date  
  	  <td><input type="date" name="bdate" value=""></td>
  	<td><label> E-mail </label></td>
  	  <td><input type="email" name="email" value=""></td>s

  	 <td><label> Contact</label></td>
  	  <td><input type="text" name="contact" value=""></td>
</tr>
<tr>
  
  	  

<td><button type="submit"  class="btn" name="ssubmit" >Submit</button></td>
  </tr></form>
	
</body>
</html>

