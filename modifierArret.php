<?php 
  $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
$id_arret=$_GET['id_arret'];
// echo $id_arret;
  if (isset($_POST['sub'])) {
    $equipement=$_POST['equipement'];
    $type=$_POST['type'];
    $desc=$_POST['desc'];
    $action=$_POST['action'];
    $date_d=$_POST['date_d'];
    $date_f=$_POST['date_f'];
    mysqli_query($con, "UPDATE arret SET equipement_arret='$equipement',description_arret='$desc',action_arret='$action',type_arret='$type',date_d_arret='$date_d',date_f_arret='$date_f' WHERE id_arret=$id_arret");
    header("location:regestryForm.php");
  }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="formulaireArret.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container register" style="border-radius: 15px;">
  <style type="text/css">
      a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  border-radius: 15px;
}

a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}

.previous {
  background-color: #f1f1f1;
  color: black;
  text-decoration: none;
}
  </style>
    <span><a href="panel.php" class="previous" >Retour</a></span>
    
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Engrais</h3>
                        <p>Add Arret informations Here And take statistics and Charts</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                      
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Add Arret</h3>
                                <form method="post" action="">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                            <select class="form-control" name="equipement" required>
                                                <option class="hidden"  selected disabled >Name Equipement</option>
                                                <option>POMPE</option>
                                                <option>BROYEUR</option>
                                                <option>REDUCTEUR</option>
                                                <option>VENTILATEUR</option>
                                                <option>CRIBLE</option>
                                                <option>BANDE</option>
                                                <option>COUPLEUR</option>
                                                <option>ELEVATEUR</option>
                                                  <option>VIS</option>
                                            </select>
                                        </div>
                                         <div class="form-group" style="width:170px;float: right;">
                                            <p style=" margin-top: 3%;
    border: none;
   
    width: 185%;
    float: right;font-weight: lighter;" >Date Debut *</p>
                                            <input required style="margin-top: 3%;

   
    width: 185%;
    float: right" type="datetime-local" class="form-control" p value="" name="date_d" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="desc" required placeholder="Description *"></textarea>
                                        
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="action" required placeholder="Action *"></textarea>
                                        </div>
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        
                                        <div class="form-group">
                                            <select class="form-control" name="type" required>
                                                <option class="hidden"  selected disabled>Type Arret</option>
                                                <option>MM</option>
                                                <option>ME</option>
                                                <option>MR</option>
                                                <option>PROCESS</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="width:150px;float: right;">
                                            <div class="lebelcss">
                                              <p style=" margin-top: 3%;
    border: none;
   
    width: 208%;
    float: right;font-weight: lighter;">Date Fin *</p>
                                            <input style="margin-top: 3%;
    
   
    width: 210%;
    float: right" type="datetime-local" required class="form-control" p value="" name="date_f"/>
                                        </div>
                                        <input type="submit" name="sub" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
</body>
</html>
