
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
    <span><a href="users.php" class="previous" >Retour</a></span>
    
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Engrais</h3>
                        <p>Modifier des Utilisateurs</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                      
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Modifier Utilisateur</h3>
                                <form method="post" action="modifierUser_.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <?php $id = $_GET['id']; ?>
                                            <input type="number" class="form-control" name="id" placeholder="id" 
                                            value="<?php echo $_GET['id']; ?>">
                                        </div>
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="login" placeholder="Username" required>
                                        </div>
                                         
                                       
                                        
                                        
                                    </div>
                                    <div class="col-md-6">
                                        
                                        
                                        
                                        <div class="form-group" style="width:150px;float: right;">
                                            <div class="lebelcss">
                                              <p style=" margin-top: 3%;
    border: none;
   
    width: 208%;
    float: right;font-weight: lighter;"><input class="form-control" type="Password" name="pass" placeholder="Mot de pass"></p>
                                            
                                        </div>
                                        <input type="submit" name="sub" class="btnRegister"  value="Modifier"/>
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
