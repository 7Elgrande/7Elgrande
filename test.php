<?php

  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
// SELECT SUM(TIMESTAMPDIFF(HOUR,date_d,date_f)) AS hours FROM reclamation WHERE name='MM'
		
if (isset($_POST['sub'])) {
	$date=$_POST['mydate'];
	$date2=$_POST['mydate2'];
	$name=$_POST['t1'];
	$newdate1=strtotime($date);
	$newdate2=strtotime($date2);
	// echo $date."<br>";

	// echo $date2."<br>";
	// echo $newdate1."<br>";
	// echo $newdate2;
	// $diff=$newdate2-$newdate1;
	// $hours=($diff/3600);
	// $hours2=sprintf("%0d",$hours);
	// echo $hours2;

mysqli_query($con, "INSERT INTO reclamation VALUES ('$name','$date','$date2')");
}

?>