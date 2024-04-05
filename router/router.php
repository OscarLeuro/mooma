<?php







if(isset($_GET['page']
)){

    $page = $_GET['page'];


    include 'views/'.$page.'.php';



}



?>