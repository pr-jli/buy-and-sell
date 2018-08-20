<?php
 session_start();
$db = mysqli_connect("localhost", "root", '', "users");

if (isset($_POST['username']))
{
   
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $password = md5( $_POST['password']);
        $sql = "SELECT id FROM accounts 
         WHERE username= '". $username ."'  AND  password= '".$password."' ";
         
        $result = mysqli_query($db, $sql);
        
        $count= mysqli_num_rows($result);

       if($count== 0)
   { 
      echo" Your user name or password is invalid";
   }
              

       else
   { 
    echo" You Have Successfully Logged in";
    $_SESSION['user']=
      header("location: page1.html");
         
   }
              
}
mysqli_close($db);

?>
