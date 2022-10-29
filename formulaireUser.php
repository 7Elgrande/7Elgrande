<?php  





  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }










$login=$_POST['login'];
$pass=$_POST['pass'];
// echo $login."<br>";
// echo $pass;
  mysqli_query($con, "INSERT INTO user(login,password) VALUES ('$login','$pass')");
header("location:users.php");

?>