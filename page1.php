﻿<?php 
session_start();
?>

<!DOCTYPE html>

<html>
<head>

	
<title>page1</title>
  <link rel="stylesheet" type="text/css" href="assets\css\style.css">

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body style="background-color: #263238; font-family: Allerta;">

      <a href="#" id="lf" style="position: absolute; 
    transition: .5s ease; 
    top: 2%;
    ">LOST&FOUND / BUY&SELL</a>
      <a href="index.html" id="lf" style="position: absolute; 
    transition: .5s ease; 
    left: 94%;
    "><font size="4">Log out</font></a>    

<p id="p1"><br><button id="hh" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3"><font size="5" color="white"><b><u>Lost Something?</b></u></font></button><br><br>"Lost something and think someone would be humble enough to return it, tell about it here" </p>

<p id="p2"><br><button id="hh" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4"><font size="5" color="white"><b><u>Found Something </u></b></font></button><br><br>"Found something that you think some might have lost (of course we know you are a good and humble person), post it here"</p>

<p id="p3"><br><button id="hh" ><a href="page5.html"><font size="5" color="white"><b><u>Buy?</u></b></font></a></button><br><br>"In need of buying something but lazzyyyy, check about it here"</p>

<p id="p4"><br><button id="hh" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5"><font size="5" color="white"><b><u>Sell?</u></b></font></button><br><br>"Oh yeah, of course you need money, and a little more space in your place, sell what you don't need anymore, here!"</p>


 <div class="modal fade" id="myModal3" role="dialog" id="m1">
    <center>
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><font face="verdana" font size="5">Lost Item Info</font></h4>
        </div>
        <div class="modal-body">
          <br>
          <center>
            <br>
            <form class="form" action="lost.php" method="post" enctype="multipart/form-data"> >
            
                <input type="file" name="image" accept="image/*">
            <br>
            <br>
            
            <input id="textboxid" type = "text" placeholder="  Item Name" name="itemname" required/> 
            <br>
            <br>
            <input id="textboxid" type = "number" placeholder="  Price" name="price" required/>
            <br>
            <br>
            <input id="textboxid" type = "telNo" placeholder="  Mobile Number" maxlength="10" name="MobileNo" required/>
            <br>
            <br>
            <textarea id="textboxid" rows="4" cols="50" name="comment" form="usrform" placeholder=" Description"></textarea>
            
            <button id="subb" id="ss" type = "submit" name = "submit" value = "Submit">submit</a></button>
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

 <div class="modal fade" id="myModal4" role="dialog" id="m1">
    <center>
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><font face="verdana" font size="5">Found!</font></h4>
        </div>
        <div class="modal-body">
          <br>
             <center>
            <br>
            <form class="form" action="found.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*">
            <br>
            <br>
           
            <input id="textboxid" type = "text" placeholder="  Item Name" name="itemname" required/> 
            <br>
            <br>
            <input id="textboxid" type = "number" placeholder="  Price" name="price" required/>
            <br>
            <br>
            <input id="textboxid" type = "telNo" placeholder="  Mobile Number" maxlength="10" name="MobileNo" required/>
            <br>
            <br>
            <input id="textboxid" type="text" name="comment" placeholder=" Description"/>
            <br>
            <br>
            <button id="subb"  type = "submit" name = "submit" value = "Submit">submit</a></button>
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


 
 
 <div class="modal fade" id="myModal5" role="dialog" id="m1">
    <center>
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><font face="verdana" font size="5">Sell It!</font></h4>
        </div>
        <div class="modal-body">
          <br>
           <center>
            <br>
            <form class="form" action="sell1.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" accept="image/*">
            <br>
            <br>
           
            <input id="textboxid" type = "text" placeholder="  Item Name" name="itemname" required/> 
            <br>
            <br>
            <input id="textboxid" type = "number" placeholder="  Price" name="price" required/>
            <br>
            <br>
            <input id="textboxid" type = "telNo" placeholder="  Mobile Number" maxlength="10" name="MobileNo" required/>
            <br>
            <br>
            <input id="textboxid" type="text" name="comment" placeholder=" Description"/>
            <br>
            <br>
            <button id="subb"  type = "submit" name = "submit" value = "Submit">submit</a></button>
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


 



<button id="b3" style="font-size: 13px;">need help?</button>
<button id="b4" style="font-size: 13px;">Contact Us:<a href="mail">mail@mail.com</a></button>

</body>
</html>