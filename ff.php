<!DOCTYPE html>
<html>
  <head>
    <title>Pareto Chart</title>
    <script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-pareto.min.js"></script>
    <style>
      html, body, #container1 {
        width: 90%;
        height: 90%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="container1"></div>
    <script>
    

  anychart.onDocumentReady(function() {
    
    var data = [
    <?php  
       $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
$result1 = mysqli_query($con, "SELECT SUM(TIMESTAMPDIFF(HOUR,date_d_arret,date_f_arret)) AS hours FROM arret  WHERE equipement_arret='moteur'");
$row1 = mysqli_fetch_assoc($result1); 
$sum1 = $row1['hours'];
//
$result2 = mysqli_query($con, "SELECT SUM(TIMESTAMPDIFF(HOUR,date_d_arret,date_f_arret)) AS hours FROM arret  WHERE equipement_arret='pompe'");
$row2 = mysqli_fetch_assoc($result2); 
$sum2 = $row2['hours'];

$result3 = mysqli_query($con, "SELECT SUM(TIMESTAMPDIFF(HOUR,date_d_arret,date_f_arret)) AS hours FROM arret  WHERE equipement_arret='vis'");
$row3 = mysqli_fetch_assoc($result3); 
$sum3 = $row3['hours'];

$result4 = mysqli_query($con, "SELECT SUM(TIMESTAMPDIFF(HOUR,date_d_arret,date_f_arret)) AS hours FROM arret  WHERE equipement_arret='broyeur'");
$row4 = mysqli_fetch_assoc($result4); 
$sum4 = $row4['hours'];

$result5 = mysqli_query($con, "SELECT SUM(TIMESTAMPDIFF(HOUR,date_d_arret,date_f_arret)) AS hours FROM arret  WHERE equipement_arret='ventilateur'");
$row5 = mysqli_fetch_assoc($result5); 
$sum5 = $row5['hours'];
//


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
?>
    
  {x: 'Moteur', value: <?php echo $sum1;?>},
  {x: 'Pompe', value: <?php echo $sum2;?>},
  {x: 'Vis', value: <?php echo $sum3;?>},
  {x: 'Broyeur', value: <?php echo $sum4;?>},
  {x: 'Ventilateur', value: <?php echo $sum5;?>}
];
  var chart = anychart.pareto();
// feed the data into the chart
chart.data(data);
chart.title('Number of Deaths for 10 Leading Causes of Death in U.S. in 2019');
// set the measure y axis title
chart.yAxis(0).title('Number of deaths');
// set the cumulative percentage y axis title
chart.yAxis(1).title('Cumulative percentage');
chart.container('container1');
// draw the chart
chart.draw();
  });

</script>    
  </body>
</html>