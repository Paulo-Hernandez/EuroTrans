<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ventas';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Error al conectar con MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['inUsername'], $_POST['inPassword'], $_POST['inEmail'])) {
	// Could not get the data that should have been sent.
    if(!isset($_POST['inUsername'])){
        exit('usuario');
    }
	exit('Complete todos los campos!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['inUsername']) || empty($_POST['inPassword']) || empty($_POST['inEmail'])) {
	// One or more values are empty.
	exit('Complete todos los campos!');
}

if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['inUsername']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'El usuario ya existe!';
	} else {
		// Username doesnt exists, insert new account
    if ($stmt = $con->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')) {
        // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
        $password = password_hash($_POST['inPassword'], PASSWORD_DEFAULT);
        $stmt->bind_param('sss', $_POST['inUsername'], $password, $_POST['inEmail']);
        $stmt->execute();
        echo 'Usuario registrado satisfactoriamente!';
    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        echo 'Ha ocurrido un error!';
    }
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Ha ocurrido un error!';
}

$con->close();
?>
