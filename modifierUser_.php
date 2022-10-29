
<?php


  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }

if (isset($_POST['sub'])) {
  $id = $_POST['id'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];

  mysqli_query($con, "UPDATE user SET login ='$login' , password = '$pass' WHERE id = '$id'");
   header("location:users.php");
     }
?>
