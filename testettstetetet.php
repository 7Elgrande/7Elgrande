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
     <style type="text/css">
       html, body, #container1 {
        width: 100%;
        height: 90%;
        margin: 0;
        padding: 0;
      }
        
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Engrais</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="panel.html" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Acceuil</span>
          </a>
        </li>
        <li>
          <a href="regestryForm.html">
            <i class='bx bx-box' ></i>
            <span class="links_name">Les Arrets </span>
          </a>
        </li>



        
        <li class="log_out">
          <a href="#">
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
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Hamza Elkabir  </span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Equipement</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">tous les temps</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Arret</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">tous les temps</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total utilisateur</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">tous les temps</span>
            </div>
          </div>
       
         
          <i class='bx bx-cart cart three' ></i>
        </div>
       
      </div>

      <!-- <br> -->
  
        
        <div class="containerX">
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
        
  {x: 'Bande', value: 4},
  {x: 'Pompe', value: 0},
  {x: 'Vis', value: 0},
  {x: 'Broyeur', value: 2},
  {x: 'Eleveteur', value: 7},
  {x: 'reducteur', value: 7},
  {x: 'Ventilateur', value: 4},
  {x: 'Crible', value: 1},
  {x: 'Coupleur', value: 5}

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
</html>        </div>

        


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

