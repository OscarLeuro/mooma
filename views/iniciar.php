<?php





?>

<main class="container">


<div class="row justify-center">

    <div class="c3 bg-white grey align-center border-1 border-radius-1 border-dark">


        <h1 class="justify-center">Inicia sesión</h1>
        <form action="./controllers/loginController.php" method="post">

            <div class="input-group-column">

            <label for=""> Usuario</label>
            <input type="text" name="email">

            <div class="input-group-column">


                <label for="">Contraseña</label>
                <input type="password" name="pass" id="">


            </div>

            <input type="submit" value="Ingresar" class=" btn btn-blue btn-large margin-y-1">


            


            </div>



        </form>

    </div>


</div>



</main>