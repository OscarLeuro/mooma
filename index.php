<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

    require 'helpers/read.php';


?>

<H1>CRUD</H1>


<?php

while($data = read($query)){


    echo $data['nombre'];

}





?>


</body>
</html>