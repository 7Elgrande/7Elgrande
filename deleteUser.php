
<?php


  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
$id = $_GET['id'];


  mysqli_query($con, "DELETE FROM user  WHERE id = '$id'");
   header("location:users.php");
   
?>
