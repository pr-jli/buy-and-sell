<?php
session_start();
 
  $db = mysqli_connect("localhost", "root", "", "users");
    $itemname=mysqli_real_escape_string($db,$_POST['itemname']);
    $MobileNo=mysqli_real_escape_string($db,$_POST['MobileNo']);
    $price=mysqli_real_escape_string($db,$_POST['price']);
    $comment=mysqli_real_escape_string($db,$_POST['comment']);
    
    
 
  $msg = "";

  
  if (isset($_POST['submit']))
   {
 
  	$image = $_FILES['image']['name'];
  	$target = "images/".basename($image);
    echo ($target);
  	$sql = "INSERT INTO selldb (itemname,MobileNo,price,comment, image)
     VALUES ('$itemname','$MobileNo','$price', '$comment','$image' )";
  	
    echo($sql);
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
      echo($msg);
  	}else{
  		$msg = "Failed to upload image";
      echo($msg);
  	}
  }
  
  mysqli_close($db);
?>