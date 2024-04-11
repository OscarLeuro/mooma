<?php





    function CRUDinsert(){


        require '../helpers/connect.php';

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        
        $SQL = "INSERT INTO pacientes (NOMBRE, EDAD, SEXO) VALUES ('$nombre', $edad, '$sexo') ";

        mysqli_query($conn,$SQL);



    }

   






    if(isset($_POST['nombre'])){


        CRUDinsert();

    
    }
   

?>