
<?php
session_start();
 
  $db = mysqli_connect("localhost", "root", "", "users");

    $itemname=mysqli_real_escape_string($db,$_POST['itemname']);
    $MobileNo=mysqli_real_escape_string($db,$_POST['MobileNo']);
    $price=mysqli_real_escape_string($db,$_POST['price']);
    $comment=mysqli_real_escape_string($db,$_POST['comment']);
    $image =mysqli_real_escape_string($db, $_FILES['image']['name']);
    
    if(isset($_POST['submit']))
    {

    $target_dir = "images2/";
    $target_file = $target_dir . basename($_FILES['image']['tmp_name']);

    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
     {
        echo "The file ". basename( $_FILES['image']['tmp_name']). " has been uploaded.";
        $sql = "INSERT INTO lostdb (itemname , MobileNo , price , comment , image)
     VALUES ('$itemname','$MobileNo','$price', '$comment','$image' )";
    
        mysqli_query($db, $sql);
         header("location:page5.html");


     } 
    else 
     {
        echo "Sorry, there was an error uploading your file.";
     }
} 
mysqli_close($db);
?>

