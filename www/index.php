<?php
session_start();

require "classes/jogo.class.php";
$g = new Game();

if(isset($_SESSION['nick']) && !empty($_SESSION['nick'])) {
    if(isset($_GET['player1']) && isset($_GET['player2'])) {
        $player1 = $_GET['player1'];
        $player2 = $_GET['player2'];

        $jogo = $g->newGame($player1, $player2);

        header('Location: jogo.php?jogo='.$jogo.'&&nome='.$player1);

    }
} else {
    header('Location: login.php');
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
    <h6>Asegúrate de escribir correctamente el nombre de tu oponente</h6>
    <form method="GET">
        <div class="form-group">
            <label id="nick" for="formGroupExampleInput"><?php echo $_SESSION['nick'];?></label>
            <input type="text" class="form-control" name="player1" value="<?php echo $_SESSION['nick'];?>">

        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nombre del oponente</label>
            <input type="text" class="form-control" name="player2">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value = "CREAR PARTIDA">
        </div>
    </form>
    <a href="buscarjogo.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">CREAR PARTIDA</a>
    <a id="fila" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">COLA</a>
    <a id="cancelar" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">SALIR DE LA COLA</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <script type="text/javascript" src="./scripts/fila.js"></script>

</body>
