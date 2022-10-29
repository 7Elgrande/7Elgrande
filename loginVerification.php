<?php 
 $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
  if (isset($_POST['sub'])) {
  	
 
  $login=$_POST['login'];
  $pass=$_POST['pass'];



$result=mysqli_query($con, "SELECT * FROM user WHERE login='$login' AND password='$pass'");
$rowcount=mysqli_num_rows($result);
if ($rowcount > 0) {
  
session_start();
$row = mysqli_fetch_assoc($result); 
$t=$row['login'];
$s=$row['password'];


$_SESSION['login']=$t;
$_SESSION['pass']=$s;
header("location:panel.php");





}else{
  echo "
  <script>alert('Nom utilisateur ou Mot de pass incorrect !');</script>

  ";
  header("location:login2.php?error=1");
}




 }








?>