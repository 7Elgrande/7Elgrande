
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="panel.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Engrais</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="panel.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Acceuil</span>
          </a>
        </li>
        <li>
          <a href="regestryForm.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Les Arrets </span>
          </a>
        </li>

  <li>
          <a href="users.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Les Utilisateurs</span>
          </a>
        </li>

        
        <li class="log_out">
          <a href="logOut.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Acceuil</span>
      </div>
     
      <div class="profile-details">
        <span class="admin_name"><?php session_start();
        echo $_SESSION['login'];

         ?></span>
        
      </div>
    </nav>

    <div class="home-content">

      <div class="overview-boxes">

        <div class="box" style="width: 37%;">

          <div class="right-side" style="height: 70px;" >

            <div class="box-topic">Total des Heures / Nombres des Arret</div>
            <div class="number"><?php 
  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
$result1 = mysqli_query($con, "SELECT SUM(TIMESTAMPDIFF(HOUR,date_d_arret,date_f_arret)) AS h FROM arret ");
$row1 = mysqli_fetch_assoc($result1); 


$result2 = mysqli_query($con, "SELECT COUNT(*) AS total FROM arret ");
$row2 = mysqli_fetch_assoc($result2);
$sum2 = $row2['total'];
$sum1 = $row1['h'];
echo $sum1."/".$sum2; 

          ?></div>
            
             
            

            

          </div>

          <i class='bx '></i>
        </div>

        
        </div>
        
       
        
        </div>
        <?php include("paretoHours.php");
?>
        <?php include("paretoFrequence.php");
?>
        
             </div>
 <?php include("pieChart.php");
?> 


      </div>

      <!-- <br> -->
  
        
       


  



        </div>
      </div>

        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

