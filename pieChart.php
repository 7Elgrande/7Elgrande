<?php
  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
$result1 = mysqli_query($con, "SELECT COUNT(type_arret) AS mm FROM arret WHERE type_arret='MM'");
$row1 = mysqli_fetch_assoc($result1); 
$sum1 = $row1['mm'];
if ($sum1=="") {
  $sum1=0;
}
$result2 = mysqli_query($con, "SELECT COUNT(type_arret) AS me FROM arret WHERE type_arret='ME'");
$row2 = mysqli_fetch_assoc($result2); 
$sum2 = $row2['me'];
if ($sum2=="") {
  $sum2=0;
}


$result3 = mysqli_query($con, "SELECT COUNT(type_arret) AS mr FROM arret WHERE type_arret='MR'");
$row3 = mysqli_fetch_assoc($result3); 
$sum3 = $row3['mr'];
if ($sum3=="") {
  $sum3=0;
}
$result4 = mysqli_query($con, "SELECT COUNT(type_arret) AS p FROM arret WHERE type_arret='PROCESS'");
$row4 = mysqli_fetch_assoc($result4); 
$sum4 = $row4['p'];
if ($sum4=="") {
  $sum4=0;
}
?>
<html>
  <head>
    <div style="margin: 0;">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Ecarts', 'Totals'],
          ['MM', <?php echo $sum1;?>],
          ['ME', <?php echo $sum2;?>],
          ['MR', <?php echo $sum3;?>],
          ['PROCESS', <?php echo $sum4;?>]
]);

        var options = {
          title: 'Les Type des equipements responsable des Arrets'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
     </div>
  </head>

  <!--  width: 67%;
        height: 300px;
        margin-top: -150px;
        right: -30%;
        padding: 0;
        position: relative; -->
  <body>
    <div id="piechart" style="width: 510px; height: 400px;margin-top: -350px;"></div>
  </body>
</html>