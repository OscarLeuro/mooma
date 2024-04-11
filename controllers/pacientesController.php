<?php



function CRUDread(){
    require 'helpers/connect.php';

    $sql = "SELECT * FROM pacientes";
    $query = mysqli_query($conn,$sql);
    

   return $query;

}


?>