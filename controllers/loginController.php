<?php

require '../helpers/connect.php';


$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

$sql = "SELECT * FROM users WHERE EMAIL = '$email' AND PASS = '$pass'";
$query = mysqli_query($conn,$sql); 


if(mysqli_num_rows($query) == 1){


while($result = mysqli_fetch_array($query)){

    $id = $result['ID'];
    $nombre = $result['NOMBRE'];
    $email = $result ['EMAIL'];
    $pass = $result['PASS'];
    $tel = $result['TEL'];
    $rol = $result['ROL'];
    
    

}





$_POST['nombre'] = $nombre;
$_POST['tel'] = $tel;
$_POST['email'] = $email;
$_POST['rol'] = $rol;
$_POST['pass'] = $pass;

session_start();

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['tel'] = $_POST['tel'];

header('location:http://localhost/PHP/Práctica/Inicio/CRUD/?page=pacientes');

}

else{echo 'no hay registros';}

?>