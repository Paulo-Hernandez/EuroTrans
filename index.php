<?php include("template/cabecera.php"); ?>
    
    <div class="jumbotron">
        <h1>Bienvenido Usuario</h1>
        <h6>Esta es la pagina donde podra acceder a la base de datos de Eurotrans</h6>
    </div>
    <br>
    <div class="container">
        <from action="validar.php" method="post">
        <h1>Login</h1>
        <p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
        <input type="submit" value="Ingresar">
    </div>
    
