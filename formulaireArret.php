<?php 
 $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }

  if (isset($_POST['sub'])) {
  	$equipement=$_POST['equipement'];
  	$type=$_POST['type'];
  	$desc=$_POST['desc'];
  	$action=$_POST['action'];
  	$date_d=$_POST['date_d'];
  	$date_f=$_POST['date_f'];
  	echo $equipement."<br>";
  	echo $type."<br>";
  	echo $desc."<br>";
  	echo $action."<br>";
  	echo $date_d."<br>";
  	echo $date_f."<br>";
  	mysqli_query($con, "INSERT INTO arret(equipement_arret,description_arret,action_arret,type_arret,date_d_arret,date_f_arret) VALUES('$equipement','$desc','$action','$type','$date_d','$date_f')");
    header("location:regestryForm.php");
  }







?>