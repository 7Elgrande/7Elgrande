 
<?php

 $con = mysqli_connect("localhost","root","root","ecart");
  if($con){
    echo "";
  }
?>
   <script type='text/javascript'>
     
     function confirmer(){
    var res = confirm("Êtes-vous sûr de vouloir supprimer?");
    if(res){
      <?php
        $id=$_GET['id'];
  mysqli_query($con, "DELETE FROM arret WHERE id_arret='$id'");
    header("location:regestryForm.php");
    ?>
    }else{
      header("location:regestryForm.php");
    }
}
   </script>;
  
?>