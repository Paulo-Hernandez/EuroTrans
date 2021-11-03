<?php include("template/cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

<div class="modal-dialog text-center">
    <div class="col-lg-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img class="mb-4" src="img/Logo.png" alt="" width="72" height="57">
            </div>
            <div>
                <form class="col-12" action="authenticate.php" method="post">     
                    <div class="form-floating" id="user-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
                        <label for="username">Usuario</label>
                    </div>
                    <br>
                    <div class="form-floating" id="pass-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password">Contraseña</label>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button class="form-control btn btn-primary" type="submit" name="Login">Ingresar</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>  
</div>

    