<?php
$usuario = $_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","", "eurotrans ");

$consulta="SELECT*FROM usuarios where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$fila=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h2>Error :(</h2>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);