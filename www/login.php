<?php
session_start();

require "classes/jogo.class.php";
require "classes/usuarios.class.php";

$g = new Game();
$u = new Usuarios();

if(isset($_SESSION['nick']) && !empty($_SESSION['nick']))
    header("Location: index.php");

if(isset($_POST['nick']) && isset($_POST['senha'])) {
    $senha = $_POST['senha'];
    $nick = $_POST['nick'];
    if($u->logIn($nick, $senha) == true) {
        $_SESSION['nick'] = $nick;
        header("Location: index.php");
    }
}
?>
<head>
<meta charset="utf-8"/>
    <meta name="keywords" content="DNK Tic Tac Toe multijugador online">
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="content-language" content="es">
	<link rel="canonical" href="matematica.gq/index.html">
	<meta name="description" content="DNK Tic Tac Toe multijugador online">
	<meta name="author" content="Daniel Marcos Guerra Gómez">
	<title>DNK Tic Tac Toe</title>
	<meta itemprop="name" content="DNK Tic Tac Toe">
	<meta itemprop="description" content="DNK Tic Tac Toe multijugador online">
	<meta property="og:description" content="DNK Tic Tac Toe multijugador online">
	<meta property="og:title" content="DNK Tic Tac Toe">
	<meta property="og:locale" content="es_ES">
    <meta property="og:type" content="game"/>
    <meta property="og:site_name" content="DNK Tic Tac Toe multijugador online"/>
    <meta property="og:url" content="http://jogodavelha.gq/index.php"/>
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:title" content="DNK Tic Tac Toe multijugador online">
    <meta property="twitter:description" content="DNK Tic Tac Toe multijugador online"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" name="nick">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Contraseña</label>
            <input type="password" class="form-control" name="senha">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value="LOG IN">
        </div>
    </form>
    <a href="cadastrar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registrarse</a>
    <p>Necesitamos que tengas una sesión para poder diferenciar las llamadas en cola</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>