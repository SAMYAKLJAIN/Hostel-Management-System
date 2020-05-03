<html>
<head>
<style>
table
{
border: 6px solid lightblue;
width:100%;
  border-radius: 14px;
  background:white;
  margin:-50px auto;
  height:100%;
    width:100%;
    padding:10px;
  text-align:center;
  
 }

 
 .header {
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
#search
{
  text-align: left;
  border: 2px solid #B0C4DE;

  border-radius: 10px ;
  }


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
  float: center;
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


  </style>
  </head>
<body>
<?php 
session_start();

if($_SESSION['status']!='active')
{header("location:home.php");
}
?>

<div class="navbar">

 <a href="out.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="home1.php"><i class="fa fa-fw fa-user"></i>Home</a>
</div>
<div class="header" align="left">
  <h1>Report</h1>

</div>


<form action="search.php" method="post">
<div class="navbar">

 	 <label>Search by </label>	
  	 <select name="look">
    <option value="adminno">Adminno</option>
   
    
  </select>
   <input type='text' name='tosearch' placeholder=''>
 <button type="submit"  class="btn" name="lookk" >Search</button>

 
</div>	
  </a>
    
  </select>
</div>

</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM student s NATURAL JOIN department d,hostel h where s.dept=d.deptno and s.hostelno=h.hno ";
$result = $conn->query($sql)or die("failed");

if ($result->num_rows > 0) {
   
    // output data of each row
    echo "<table  border='4' cellspacing='1' cellpadding='1' align='center' > <th>Admission number</th><th>Name</th><th>department</th><th>Semester</th><th>Hostel Name</th><th>Room Number</th><th>Age</th><th>Birth_date</th><th>Gender</th><th>Email</th><th>Contact</th></tr>";
    while($row = $result->fetch_assoc()) {
    $adminno = $row['adminno'];
$email   = $row['email'];
 $name = $row['name'];
$sem    = $row['sem'];
 $age = $row['age'];
$fathername    = $row['fathername'];
 $dept = $row['dept'];
$hostelno    = $row['hostelno'];
 $roomno= $row['roomno'];
$bdate    = $row['bdate'];
 $gender= $row['gender'];
$contact    = $row ['contact'];
$hostel=$row['hname'];
   $deptname=$row['deptname'];
echo "  <tr><td> $adminno</td><td>$name</td><td>$deptname<td>   $sem</td><td>$hostel</td><td>  $roomno</td><td>$age</td><td>$bdate</td><td>$gender</td><td>$email</td><td>$contact</td></tr><br>";
   }
   echo "</table>";

} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
