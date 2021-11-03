<?php

function esVacia($usuario, $contrasena, $repContrasena){
    if(empty(trim($usuario)) && !empty(trim($contrasena)) && !empty(trim($repContrasena))){
        return FALSE;
    }else{
        return TRUE;
    }
}

function validaLargo($usuario){
    if(strlen(trim($usuario)) > 3 && strlen(trim($usuario)) < 20) {
        return TRUE;
    }else{
        return FALSE;
    }
}

function esusuarioExiste($usuario) {
    global $mysqli;

    $_usuario = trim($usuario);

    $sql = "SELECT id FROM users WHERE usuario = ?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_usuario);

    $stmt->execute();

    $stmt-store_result();

    $numRows = $stmt->num_rows;
    $stmt->close();

    if($numRows > 0){
        return TRUE;
    }else{
        return FALSE;
    }
}

function loginVacio($usuario, $contrasena) {
    if(!empty(trim($usuario)) && !empty(trim($contrasena))){
        return FALSE;
    }else{
        return TRUE;
    }
}

function login($usuario, $contrasena) {
    global $mysqli;

    $sql = "SELECT id, contrasena FROM users WHERE usuario = ?";

    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param("s", $usuario);

    $stmt->execute();

    $stmt->store_result();

    $numRows = $stmt->num_rows;

    if($numRows > 0) {
        $stmt->bind_result($id,$contra);

        $stmt->fetch();

        $contraValidada = password_verify($contrasena, $contra);

        if($contraValidada){
            $_SESSION['user'] = $usuario;

            $lastSession = lastSession($id);

            header('Location:index.php');
        }else{
            return "La contraseña no coincide";
        }
    }else{
        return "El usuario no existe";
    }
}

function lastSession($id){
    global $mysqli;

    $stmt = $mysqli->prepare("UPDATE users SET ultima_conexion=NOW() WHERE id=?");

    $stmt->bind_param("i",$id);

    if($stmt->execute()){
        if($stmt->affected_rows > 0){
            $stmt->close();
            return TRUE;
        }else{
            $stmt->close();
            return FALSE;
        }
    }else{
        $stmt->close();
        return FALSE;
    }
}