<?php

require 'connect.php';


$sql = "SELECT * FROM pacientes";
$query = mysqli_query($conn,$sql);

function read($query){


;




    while($result = mysqli_fetch_array($query) )
    
    { 
        
        $data['nombre'] = $result['NOMBRE'];
        $data['edad'] = $result['EDAD'];
        $data['genero'] = $result['SEXO'];
    
    return $data;
    
    }


   


}


?>