
<?php  


$con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
$result1 = mysqli_query($con, "SELECT name,SUM(TIMESTAMPDIFF(HOUR,date_d,date_f)) AS hours FROM reclamation WHERE name='moteur'");
$row1 = mysqli_fetch_assoc($result1); 
$sum1 = $row1['hours'];

$result2 = mysqli_query($con, "SELECT name,SUM(TIMESTAMPDIFF(HOUR,date_d,date_f)) AS hours FROM reclamation WHERE name='pompe'");
$row2 = mysqli_fetch_assoc($result2); 
$sum2 = $row2['hours'];

$result3 = mysqli_query($con, "SELECT name,SUM(TIMESTAMPDIFF(HOUR,date_d,date_f)) AS hours FROM reclamation WHERE name='reducteur'");
$row3 = mysqli_fetch_assoc($result3); 
$sum3 = $row3['hours'];

$result4 = mysqli_query($con, "SELECT name,SUM(TIMESTAMPDIFF(HOUR,date_d,date_f)) AS hours FROM reclamation WHERE name='P'");
$row4 = mysqli_fetch_assoc($result4); 
$sum4 = $row4['hours'];


if ($sum1=="") {
$sum1=0;}
if ($sum2=="") {
$sum2=0;}
if ($sum3=="") {
$sum3=0;}
if ($sum4=="") {
$sum4=0;}

$data = array('moteur'=> <?php echo $sum1;?> , 'pompe'=> <?php echo $sum2;?> ,'reducteur'=> <?php echo $sum3;?> ,'p'=> <?php echo $sum4;?>); 
<?php 


arsort($data); 
  
foreach($data as $x => $x_value) { 
 
?>

  


<?php  
echo "var data = [
  {x: echo $x; , value:echo $x_value;}"

?>
    ?>