<?php
session_start();
  $db= mysqli_connect('localhost','root','','users');
  $username=$MobileNo=$year=$email=$password=$cnfpassword=$errpass= $erremail=$errusername=$errlength=$errnumber="";
  if(isset($_POST['username']))
  { 

  	$username=mysqli_real_escape_string($db,$_POST['username']);
		$MobileNo=mysqli_real_escape_string($db,$_POST['MobileNo']);
		$year=mysqli_real_escape_string($db,$_POST['year']);
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$password=md5($_POST['password']);
		$cnfpassword=md5($_POST['cnfpassword']);
    $sql = "SELECT id FROM accounts 
         WHERE username= '". $username ."' ";
         $result = mysqli_query($db, $sql);
        
         $count= mysqli_num_rows($result);

  if($count== 0)
  {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		
				if($password!=$cnfpassword)
				{
				$errpass="The passwords do not match";
				}
		
				else
				{
            if (is_numeric($MobileNo))
             {
                if(strlen($MobileNo)==10 && $MobileNo{0}!==0 && strlen($year)==1 && strlen($email)<100  )
                {
                  mysqli_query($db,"INSERT INTO accounts(username, MobileNo , year, email,password) 
						      VALUES('$username','$MobileNo','$year','$email','$password')");
						      $SESSION['username']=$username;
						    
						      header("location:page1.php");
                }
                else
                $errlength="The length limit exceeded";
              }
              else
              $errnumber="enter the mobile no. in numeric format";
				}
		}
		else 
		{
			$erremail="enter a valid email" ;
		}
 }
 else

{$errusername="The username already exists!";
}
}
  mysqli_close($db);
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="assets\css\style.css">
<title>SignUp</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</head>
<body style="background-color: #00897B">

<div class="container1">  
  <div class="top-left">LOST & FOUND</div>
  <div class="top-right">BUY & SELL</div>
  </div>


<p style="position: absolute; 
    transition: .5s ease; 
    top: 28%;
    left: 78%; color: white;" id="borde" id="borde1"></p>



<h2 style="position: absolute; 
    transition: .5s ease; 
    top: 30%;
    left: 3%; color: white; font-family: Quicksant; font-size: 45px;"><b>About</b></h2>
<p style="position: absolute; 
    transition: .5s ease; 
    top: 43%;
    left: 3%; color: white; font-family: Lato; font-size: 25px;"> This website helps return the lost item to the rightful<br> owner, buy, and post about your lost belonging in a<br> simple and convenient way.</p>


  <!-- Trigger the modal with a button -->
  <button id="b2" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Log In</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog" id="m1">
    <center>
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><font face="verdana" font size="5">Log in</font></h4>
        </div>
        <div class="modal-body">
          <br>

           <center>
            
            <form class="form" action="login.php" method="post" >
            	<div class="alert alert-error"><?= $_SESSION['message']?></div>
 			<input id="textboxid" type = "text" placeholder="  Name" name="username" required/> 
  	        <br>
 			<br>
 			<input id="textboxid" type = "password" placeholder="  Password" name= "password" required/>
 			<br>
 			<br>
 			<input id="logg" type = "submit" name = "LogIn" value = "Log In">
 			<br>
 			<br>
 		    </form>
            </center>
               </div>
       </div>
      
    </div>
</center>
  </div>
  
</div>


  
  <button id="b1" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Sign Up</button>

  
  <div class="modal fade" id="myModal2" role="dialog" id="m2">
    <center>
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
            <h4><font face="verdana" font size="5">Sign Up</font></h4>
        </div>
        <div class="modal-body">
           <br>
           <span class="error"></span>
            <center>
            <form class="form" action="index.php" method="post" >
		    <input id="textboxid" type = "text" placeholder="  Name" name="username" maxlength="100" required/>
        <br>
        <span class="error"> <?php echo $errusername;?></span> 
			<br><br>
            <input id="textboxid" type="text" placeholder="  Mobile Number"  name="MobileNo"  required/>
        <br>
            <span class="error"> <?php echo $errnumber;?></span> 
			<br><br>
     	    <input id="textboxid" type="number" placeholder="  Year You are in (1,2,3,4)" min="1" max="4" step="1" maxlength="1" name="year"  required/>
          <br>
          <span class="error"> <?php echo $errlength;?></span> 
			<br><br>            
			<input id="textboxid" type= "email" placeholder="  E-mail" name="email" maxlength="100" required/>
      <br>
      <span class="error"> <?php echo $erremail; echo $errlength ;?></span>
     	    <br><br>
    		<input id="textboxid" type = "password" placeholder="  Password" name="password" 
         pattern=".{6,}" title="Six or more characters" required/>
            <br><br><br>
   		    <input id="textboxid" type = "password" placeholder="  Confirm Password" name="cnfpassword" required/>
          <br>
          <span class="error"> <?php echo $errpass; echo $errlength ;?></span>
  `			<br>
 			<br>
 			<input id="subb" type = "submit" name = "submit" value = "Submit">
 			<br>
 			<br>
 		    </form>
            </center>

           </div>
       </div>
      </div>
  </center>
    </div>
  </div>
  







<button id="b3">need help?</button>
<button id="b4">Contact Us:<a href="mail">mail@mail.com</a></button>
   
</body>
</html>




