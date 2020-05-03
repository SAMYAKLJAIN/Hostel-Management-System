<?php
session_start();
$adminno = "";
$email   = "";
 $name = "";
$sem    = "";
 $age = "";
$fathername    = "";
 $dept = "";
$hostel    = "";
 $roomno= "";
$bdate    = "";
 $gender= "";
$contact    = "";
 
$nae ="";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Student');



 
if (isset($_POST['ssubmit'])) {
 $name = mysqli_real_escape_string($db, $_POST['name']);
  $adminno= mysqli_real_escape_string($db, $_POST['adminno']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
    $sem = mysqli_real_escape_string($db, $_POST['sem']);
      $age = mysqli_real_escape_string($db, $_POST['age']);
        $fathername = mysqli_real_escape_string($db, $_POST['fathername']);
          $dept = mysqli_real_escape_string($db, $_POST['dept']);
            $hostel = mysqli_real_escape_string($db, $_POST['hostel']);
              $roomno = mysqli_real_escape_string($db, $_POST['roomno']);
                $bdate = mysqli_real_escape_string($db, $_POST['bdate']);
                  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  }


  $required = array('name', 'adminno', 'email', 'sem', 'age', 'fathername','dept','hostel','roomno','bdate','gender','contact');

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
   
    $error = true;
    
  }
}

if ($error) {
echo "<script>
alert('All the fields are required');
window.location.href='studentform.php';
</script>";

} else {
  echo "Proceed...";
}

  $user_check_query = "SELECT * FROM student s WHERE s.adminno='$adminno' ";
  $res=  $user_check_query;

  $result = mysqli_query($db, $user_check_query)or die("failed ");
  $adminnno = mysqli_fetch_array($result);

  if ($adminnno) { // if user exists
    
echo "<script>
alert('student as not registered ');
window.location.href='home1.php';
</script>";

     }


      
    
  




  	$query = "INSERT INTO student(name,adminno,email,sem, age, fathername,dept,hostelno,roomno,bdate,gender,contact) 
  			  VALUES('$name','$adminno','$email','$sem', '$age', '$fathername','$dept','$hostel','$roomno','$bdate','$gender','$contact')"or die("failed1");
  			  
  	mysqli_query($db, $query)or die("fail");
  	echo "<script>
  	alert('Inserted succes');
  	window.location.href='home.php';
 </script>";
  	
  	//header('location: home1.php');

  	 ?>
 
 
 
 
 
 
 
 
 

