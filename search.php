 <html>
 <head>
 <style>
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
  text-decoration: none;s
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student";
$nam="";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $look = mysqli_real_escape_string($conn, $_POST['look']);
 $tosearch = mysqli_real_escape_string($conn, $_POST['tosearch']);

switch($look)
{
case "adminno":
$sql = "SELECT * FROM student s NATURAL JOIN department d,hostel h where s.dept=d.deptno and s.hostelno=h.hno and s.adminno=$tosearch  ";
break;
case "hostel":
$sql = "SELECT * FROM hostel h NATURAL JOIN department d,student s where s.dept=d.deptno and s.hostelno=h.hno and h.hname=$tosearch ";
break;
case "name":
$sql = "SELECT * FROM student s,deptartment d,hostel h where s.dept=d.deptno and s.hostelno=h.hno and h.hname=$tosearch  ";
break;
default:
        echo "No information available for that day.";
        break;
        }


$result = $conn->query($sql)or die("dead");
echo '<div class="navbar">
 <a href="home1.php"><i class="fa fa-fw fa-user"></i>Home</a>

  <a href="report1.php"><i class="fa fa-fw fa-user"></i>Back</a>
  
 
</div>';
if ($result->num_rows > 0) {
   
    // output data of each row
 echo "<table  border='10' cellspacing='7' cellpadding='2' align='center' style='border: 5px solid purple;
width:50%;
  border-radius: 14px;
  background:white;
  margin:50px auto;
 

    padding:10px;
  text-align:center;'> <th>Admission number</th><th>Name</th><th>department</th><th>Semester</th><th>Hostel Name</th><th>Room Number</th><th>Age</th><th>Birth_date</th><th>Gender</th><th>Email</th><th>Contact</th></tr>";
    while($row = $result->fetch_assoc()) {
    $adminno = $row['adminno'];
$email   = $row['email'];
 $name = $row['name'];
$sem    = $row['sem'];
 $age = $row['age'];
$fathername    = $row['fathername'];
 $deptname = $row['deptname'];
$hostelname   = $row['hname'];
 $roomno= $row['roomno'];
$bdate    = $row['bdate'];
 $gender= $row['gender'];
$contact    = $row ['contact'];
 
  
echo "  <tr><td> $adminno</td><td>$name</td><td>$deptname<td>   $sem</td><td>$hostelname</td><td>  $roomno</td><td>$age</td><td>$bdate</td><td>$gender</td><td>$email</td><td>$contact</td></tr><br>";
   }
   echo "</table>";

} else {
    echo "No data available";
}

$conn->close();
?>

</html>
	


