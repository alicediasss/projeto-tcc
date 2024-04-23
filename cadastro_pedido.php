	<?php
	session_start();

	//echo "<div style='color:red; font-size:15px; font-weight:bold;'>Usuario logado: " . $_SESSION['usuarioNome'] . "</div>";

	include_once("conexao.php");

	if (isset($_SESSION["msg"])) :
		print $_SESSION["msg"];
		unset($_SESSION["msg"]);

	endif;
	?>

	<!DOCTYPE html>
	<html lang="pt-br">

	<head>
	<title>Gerenciamento de clientes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

	<body 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/tag01.png" alt="IMG">
				</div>

					<form name="formCliente" action="processa.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Pedidos
					</span>
		<div style="display: inline-block;">
			<h2>Novos Pedidos</h2>
				<p> ID: <input required type="number" name="id" id="id" placeholder="Favor, digite o ID" size="50">
				<p> CPF do Cliente: <input required type="text" name="CPFcliente" id="CPFcliente" placeholder="Favor, digite o CPF do cliente" size="50">
				<p> Valor: <input name="valor" id="valor" placeholder="Favor, digite o valor do pedido" size="50">
				<div class="align-left"><p><button style="text-align: center;" type="submit";>Realizar pedido</button></div>
				<div class="align-left" <button style="text-align:center; font-size: 15px;" type="input"><a href="home.php">Página Inicial</button></div>
			</form>
		</div>

	<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	</body>

	</html>