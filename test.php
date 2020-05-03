<?php  
  
session_start(); 
// function countt()
 //{  
if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
echo"views = ".$_SESSION['views']; 


//}
  
?> 
