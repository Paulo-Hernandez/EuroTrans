<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
</head>
<body>
    <from action="validar.php" method="post">
    <h1>Login</h1>
    <p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
    <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
    <input type="submit" value="Ingresar">
</body>
</html>