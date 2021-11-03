<?php include("template/cabecera.php"); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	</head>

    <form class="form-control col-12 container">
        <div class="text-center mb-3">
            <h1>Registrar Usuario</h1>
        </div>
        <div class ="row mb-4">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputUser" placeholder="Usuario">
                    <label for="inputUser">Usuario</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputCorreo" placeholder="nombre@ejemplo.com">
                    <label for="inputCorreo">Correo Electrónico</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                    <label for="inputPassword">Contraseña</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Contraseña">
                    <label for="inputPassword2">Repita la contraseña</label>
                </div>
            </div>
        </div>


    </form>


</html>
<?php include("template/pie.php"); ?>
