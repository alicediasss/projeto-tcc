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
					<img src="images/sacola01.png" alt="IMG">
				</div>
					<form name="formCliente" action="processa.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Clientes
					</span>
		

		<div style="display: inline-block;">
			<h2> Cadastro de Clientes</h2>
				<p> CPF: <input required type="text" name="CPF" id="CPF" placeholder="Favor, digite o CPF" size="50">
				<p> Nome: <input required type="text" name="nome" id="nome" placeholder="Favor, digite a nome" size="50">
				<p> Celular: <input required type="number" name="celular" id="celular" placeholder="Favor, digite o celular" size="50">
				<p> Rua: <input required type="text" name="rua" id="rua" placeholder="Favore, digite a rua" size="50">
				<p> Numero: <input required type="number" name="numero" id="numero" placeholder="Favor, digite o número" size="50">
				<p> Bairro: <input required type="text" name="bairro" id="bairro" placeholder="Favor, digite o bairro" size="50">
				<p> Cidade: <input required type="text" name="cidade" id="cidade" placeholder="Favor, digite a cidade" size="50">
				<p> Estado: <input required type="text" name="estado" id="estado" placeholder="Favor, digite o estado">
				<p> CEP: <input required type="number" name="cep" id="cep" placeholder="Favor, digite o CEP" size="50">
				<div class="align-left"><p><button style="text-align: center;" type="submit";>Cadastrar cliente</button></div>
				<div class="align-right" <button style="text-align:center; font-size: 15px;" type="input"><a href="home.php">Página Inicial</button></div>				
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