<!DOCTYPE html>
<html>
  <head>
    <title>Pareto Chart Example</title>
    <style>
         #container1 {
        width: 60%;
        height: 300px;
        margin-top: -120px;
        right: -39%;
        padding: 0;
        position: relative;

      }
    </style>
    <script src="fileJs.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-pareto.min.js"></script>
  </head>
  <body>
    <div id="container1"></div>
<script>
  anychart.onDocumentReady(function() {
    // The entire code of the Pareto chart will be here.
     var data = [
    <?php 
  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
$result1 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='BANDE'");
$row1 = mysqli_fetch_assoc($result1); 
$sum1 = $row1['count'];

$result2 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='POMPE'");
$row2 = mysqli_fetch_assoc($result2); 
$sum2 = $row2['count'];



$result3 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='VIS'");
$row3 = mysqli_fetch_assoc($result3); 
$sum3 = $row3['count'];

$result4 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='BROYEUR'");
$row4 = mysqli_fetch_assoc($result4); 
$sum4 = $row4['count'];

$result5 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='ELEVATEUR'");
$row5 = mysqli_fetch_assoc($result5); 
$sum5 = $row5['count'];

$result6 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='REDUCTEUR'");
$row6 = mysqli_fetch_assoc($result6); 
$sum6 = $row6['count'];

$result7 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='VENTILATEUR'");
$row7 = mysqli_fetch_assoc($result7); 
$sum7 = $row7['count'];

$result8 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='CRIBLE'");
$row8 = mysqli_fetch_assoc($result8); 
$sum8 = $row8['count'];

$result9 = mysqli_query($con, "SELECT COUNT(*) AS count FROM arret WHERE equipement_arret='COUPLEUR'");
$row9 = mysqli_fetch_assoc($result9); 
$sum9 = $row9['count'];


if ($sum1=="") {
$sum1=0;}

if ($sum2=="") {
$sum2=0;}

if ($sum3=="") {
$sum3=0;}

if ($sum4=="") {
$sum4=0;}

if ($sum5=="") {
$sum5=0;}

if ($sum6=="") {
$sum6=0;}

if ($sum7=="") {
$sum7=0;}

if ($sum8=="") {
$sum8=0;}

if ($sum9=="") {
$sum9=0;}

?>
  {x: 'Bande', value: <?php echo $sum1;?>},
  {x: 'Pompe', value: <?php echo $sum2;?>},
  {x: 'Vis', value: <?php echo $sum3;?>},
  {x: 'Broyeur', value: <?php echo $sum4;?>},
  {x: 'Eleveteur', value: <?php echo $sum5;?>},
  {x: 'reducteur', value: <?php echo $sum6;?>},
  {x: 'Venti', value: <?php echo $sum7;?>},
  {x: 'Crible', value: <?php echo $sum8;?>},
  {x: 'Coupleur', value: <?php echo $sum9;?>}

    


];
  var chart = anychart.pareto();
// feed the data into the chart
chart.data(data);
chart.title('Le Frequence de chaque Equipement');
// set the measure y axis title
chart.yAxis(0).title('Frequence');
// set the cumulative percentage y axis title
chart.yAxis(1).title('Pourcentage');
chart.container('container1');
// draw the chart
chart.draw();
  });

</script>  </body>
</html>