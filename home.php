<?php 
session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}
?>
<?php include("template/cabecera.php"); ?>


<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>Website Title</h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>
	<div class="content">
		<h2>Home Page</h2>
		<p>Bienvenido, <?=$_SESSION['name']?>!</p>
	</div>
</body>

<?php include("template/pie.php"); ?>
