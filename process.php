<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="registered"; // Database name 
$tbl_name="members"; // Table name 
$con=mysqli_connect("$host", "$username", "$password");
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con ,"registered")or die("cannot select DB");
$myusername=$_POST['user']; 
$mypassword=$_POST['pass']; 

$myusername = mysqli_real_escape_string($con,$myusername);
$mypassword = mysqli_real_escape_string($con,$mypassword);

$result=mysqli_query($con,"select * from members where username= '$myusername'and password='$mypassword'" )
or die("failesd to quer database ");

$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);



if($row['username']==$myusername && $row['password']==$mypassword)
{
if($count==1)
{

//require 'test.php';
$_SESSION['status']='active';

echo "<script>
alert('Login Successfull');
window.location.href='home1.php';

</script>";
}
}

else
 {
 unset($_session['logged_in']);
 session_destroy();
 
echo "<script>
alert('Wrong username or password ');

window.location.href='home.php';
</script>";

}


?>



