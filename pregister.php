<?php
session_start();

$username = "";
$email    = "";
 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registered');


if (isset($_POST['reg_user'])) {
 $adminno = mysqli_real_escape_string($db, $_POST['adminid']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

 


  if (empty($username)) { echo "hi";}
  if (empty($email)) {     echo "<script>
alert('Wrong username or password ');

</script>";}
  if (empty($password)) {     echo "<script>
alert('Wrong username or password ');

</script>"; }

  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM members WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
    echo "<script>
alert('Wrong username or password ');

</script>";

     }


      
    }
  

  // Finally, register user if there are no errors in the form

  	//$password = md5($password_1);//encrypt the password before saving in the database
echo "$password";

  	$query = "INSERT INTO members(Adminid,username, email, password) 
  			  VALUES('$adminno','$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	echo "<script>
  	alert('Inserted succes');
 </script>";
  	$_SESSION['username'] = $username;
  	  	$_SESSION['success'] = "You are now logged in";
  	//header('location: home.php');
 
  	header("location:home1.php");
  	
  	?>
  	
  	
  	
  	


