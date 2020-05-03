<html>
   
   <head>
   
      <title>Update </title>
   </head>
   
   <body>
      <?php
        $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
              $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
       $adminno = mysqli_real_escape_string($conn, $_POST['adminno']);
             mysqli_select_db($conn,'Student');
                if(isset($_POST['del']))
            {



// sql to delete a record
$sql = "DELETE FROM student WHERE adminno=$adminno";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
         if(isset($_POST['update'])) {
          
            
    
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }

$hosteno="";
             $look = mysqli_real_escape_string($conn, $_POST['look']);
 $toupdate = mysqli_real_escape_string($conn, $_POST['tosearch']);
 $adminno = mysqli_real_escape_string($conn, $_POST['adminno']);
  
     
switch($look)
{
case "hname":
 
 switch($toupdate)
 {
 case 'Nandini':$hostelno=1;
 break;
 case 'kaveri':$hostelno=2;
break;
 case 'nandini':$hostelno=1;
 break;
 case 'Kaveri':$hostelno=2;
break;
default :        echo "<script>
  	alert('  Enter valid data');
  	window.location.href='update.php';
 </script>";
}


$sql = "UPDATE student SET hostelno = $hostelno WHERE adminno= $adminno" ;
                              break;
case "roomno":
$sql="UPDATE student SET roomno = $toupdate WHERE adminno= $adminno" ;
break;
case "age":
$sql="UPDATE student SET age = $toupdate WHERE adminno= $adminno" ;
break;
case "contact":
$sql="UPDATE student SET contact= $toupdate WHERE adminno= $adminno" ;
break;
case "sem":
$sql="UPDATE student SET sem = $toupdate WHERE adminno= $adminno" ;
break;
case "dept":
$sql="UPDATE student SET dept= $toupdate WHERE adminno= $adminno" ;
break;
case "email":
$sql="UPDATE student SET email = $toupdate WHERE adminno= $adminno" ;
break;
case "name":
$sql="UPDATE student SET name= $toupdate WHERE adminno= $adminno" ;
break;
default:
        echo "No information available ";
        break;
        }
            

            
           
      
           
}
  
             $retval = mysqli_query( $conn,$sql );
  
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
         
            echo "<script>
  	alert('  Updated data successfully');
  	window.location.href='report1.php';
 </script>";
            
          
      ?>
      
   </body>
</html>
