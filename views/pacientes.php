
<?php

require './controllers/pacientesController.php';


$data = CRUDread();


while($result = mysqli_fetch_array($data)){


    $nombre = $result['NOMBRE'];
    $edad = $result['EDAD'];

    $row = ["Nombre" => $nombre, 'Edad' => $edad];



}


 



?>

<div class="container">


<div class="c3 bg-grey">

<h4>Perfil</h4>

</div>


</div>


</div>