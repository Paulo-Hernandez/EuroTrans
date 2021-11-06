<?php
session_start();
//Información de conexión
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ventas';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if(mysqli_connect_errno()){
    //En caso de que exista un error
    exit('Conexión fallida con MySQL: ' . mysqli_connect_error());
}

if(!isset($_POST['username'], $_POST['password'])){
    exit('No pueden haber espacios en blanco');
}

if($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if(password_verify($_POST['password'], $password)){
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: home.php');
        }else{
            echo 'Incorrect username and/or password!';
        }   
    }else{
        echo 'Incorrect username and/or password!';
    }

    $stmt->close();
}
?>