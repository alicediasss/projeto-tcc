<?php
/*
Nome: Alice dos Santos Dias
Disciplina: Projeto Aplicado
*/
session_start();
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form  name="login" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Bem-vind@
					</span>
						<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="button">
						<a href="verificar.php">
							Registro de Clientes
						</button>
					</div>
	
						<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="button">
						<a href="verificar_pedido.php">
							Registro de Pedidos
						</button>
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