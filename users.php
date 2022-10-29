  <?php
$con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }

  $result = mysqli_query($con, "SELECT COUNT(id) AS count FROM user");
$row = mysqli_fetch_assoc($result); 
$sum = $row['count'];


$nbr_element_per_page=5;
$nbr_page=ceil($sum/$nbr_element_per_page);

@$page=$_GET['page'];
if ($page=="") {
  $page=1;
}
$debut=($page-1)*$nbr_element_per_page;

 





$sql = "SELECT * FROM user LIMIT $debut,$nbr_element_per_page";
$data = $con->query($sql) or die($con->error);;
$con->close(); 





              






?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
            <span class="links_name">Les Arrets</span>
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
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php session_start();
        echo $_SESSION['login'];

         ?></span>
        
      </div>
    </nav>
    <div class="center">
      <a href="formulaireUser.html"><button >Ajouter un Utilisateur</button></a>
      
    </div>

   <script type="text/javascript">
     
     function confirmer(){
    var res = confirm("Êtes-vous sûr de vouloir supprimer?");
    if(res){
        // Mettez ici la logique de suppression
    }
}
   </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="myjs.js"></script>
<div class="container">
  <div class="row" style="margin-top: 180px;">
    
        
        <div class="col-md-12">
        <h4>La Liste des Arrets</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead style="background-color: #12C240; border: 1px solid; box-sizing: border-box; text-align: center; align-items: center;">
                   
                   
                   <th>ID</th>
                    <th>Nom Utilisateurs</th>
                     <th>Mot de pass</th>
                     <th>Modifier</th>
                     <th>Supprimer</th>
                   </thead>
    <tbody>
    <?php while($rows=$data->fetch_assoc())
                {
                  ?>
    <tr>
    <td> <?php echo $rows['id'];?></td>
    <td> <?php echo $rows['login'];?></td>
    <td> <?php echo $rows['password'];?></td>
  


    <td><a href="modifierUser.php?id=<?php echo $rows['id']; ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>


    <td><a href="deleteUser.php?id=<?php echo $rows['id'];?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button onclick="confirmer()" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
    </tr>
    <?php
   }
     ?>
   
    
   
    
    </tbody>
        
</table>
  <footer>
    <style type="text/css">
      
      nav {

    display: flex;
    justify-content: center;
}
        
.pagination {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}
        
.pagination li {
    margin: 0 1px;
}
   
    </style>
           
               
               <nav aria-label="pagination">
    <ul class="pagination">
        
        <li>

<?php  
                for($i=1;$i<=$nbr_page;$i++){
                  // echo "<a href='?page=$i'>$i</a>&nbsp";
                
               ?>

          <a href="?page=<?php echo $i;?>"><span class="visuallyhidden"></span><?php echo $i;?></a>
          <?php
}?>
        </li>
      
    </ul>
</nav>



            <!--  </div> -->
    </footer> 
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