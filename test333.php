<?php
$con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }

  $result = mysqli_query($con, "SELECT COUNT(id_arret) AS count FROM arret");
$row = mysqli_fetch_assoc($result); 
$sum = $row['count'];
$nbr_element_per_page=5;
$nbr_page=ceil($sum/$nbr_element_per_page);






@$page=$_GET['page'];
$debut=($page-1)*$nbr_element_per_page;
echo $debut;
?>