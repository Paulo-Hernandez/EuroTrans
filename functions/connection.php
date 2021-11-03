<?php

    $mysqli = new mysqli("localhost","root","", "ventas");

    if($mysqli->connect_errno){
        echo "Algo salió mal";
    }
?>