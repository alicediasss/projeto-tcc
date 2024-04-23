<?php

session_start();
//echo "<div style='color:red; font-size:15px; font-weight:bold;'>Usuario logado: " . $_SESSION['usuarioNome'] . "</div>";

include_once("conexao.php");
error_reporting(E_ERROR | E_PARSE);

if (isset($_SESSION["msg"])) :
    print $_SESSION["msg"];
    unset($_SESSION["msg"]);
endif;

// Query para listar os clientes do banco
$querylistar = "SELECT * FROM _clientes";
$dadosclientes = mysqli_query($conexao, $querylistar) or die($mysqli->error);
$linhacliente = mysqli_fetch_assoc($dadosclientes);

// Query para buscar um produto com o número do fornecedor do banco
//if (isset($_POST['numForn'])) {
$numForn = $_POST['numForn'];
$querypesquisar = "SELECT * FROM produtos WHERE forn_id = '$numForn'";
$dadospesquisa = mysqli_query($conexao, $querypesquisar);
$registropesquisa = mysqli_fetch_array($dadospesquisa);
//}

// Query para buscar um produto com o nome do fornecedor do banco
$nomeForn = $_POST['nomeForn'];
$querypesqNome = "SELECT * FROM produtos INNER JOIN fornecedores ON produtos.forn_id = fornecedores.id_forn WHERE nome_forn = '$nomeForn'";
//$querypesqNome = "SELECT * FROM produtos WHERE nome_forn = '$nomeForn'";
//$querypesqNome = "SELECT * FROM fornecedores Where nome_forn = '$nomeForn'";
$dadospesqNome = mysqli_query($conexao, $querypesqNome);
$registroPesqNome = mysqli_fetch_array($dadospesqNome);

//Verificar por data
$dataPesqCad = $_POST['dataCad'];
$dataPesqFab = $_POST['dataFab'];

$querypesCad = "SELECT * FROM produtos WHERE created = '$dataPesqCad' OR dataFab = '$dataPesqFab'";
$dadospesquisaCad = mysqli_query($conexao, $querypesCad);
$registropesquisaCad = mysqli_fetch_array($dadospesquisaCad);

//Exclusão de produtos
if (isset($_POST['excluir'])) {
    $nomeFornDel = $_POST['nome_forn'];
    $queryDel = "DELETE FROM fornecedores WHERE nome_forn = '$nomeFornDel' ";
    $dadosDel = mysqli_query($conexao, $queryDel);
    $registroDel = mysqli_fetch_array($dadosDel);
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$queryEdit = "SELECT * FROM _usuarios WHERE id_usuario = '$id'";
$dadosEdit = mysqli_query($conexao, $queryEdit);
$row_usuario = mysqli_fetch_assoc($dadosEdit);

//

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
				
				
					<form  name="login" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Clientes
					</span>
					
												<div id="divBusca">
													<!--<img style="width: 5%;" id="btnBusca" alt="Pesquise aqui" /><br><br>-->
													<h1>Clientes cadastrados:</h1>
													<table style="border:3px solid; width: 130%;">
														<thead>
															<tr style="border: 2px solid; font-weight: bold; text-align:center;">
																<td style="border: 2px solid;">CPF</td>
																<td style="border: 2px solid;">Nome</td>						
															</tr>
														</thead>
														<tbody style="border-style:solid;">
															<?php if (mysqli_num_rows($dadosclientes) > 0) {
																do {
															?>
																	<tr align="center">
																		<td style="border: 2px solid;"><?php echo $linhacliente["CPF"]; ?> </td>
																		<td style="border: 2px solid;"><?php echo $linhacliente["nome"]; ?></td>
																	</tr>
															<?php } while ($linhacliente = mysqli_fetch_assoc($dadosclientes));
															}
															?>
														</tbody>
													</table>
												</div>
											<hr>

	

    <button style="text-align:center; font-size: 15px;" type="input"><a href="cadastro.php">Novo Cliente</button>
	<div class="align-right"><button style="text-align:center; font-size: 15px;" type="input"><a href="home.php">Página Inicial</button></div>
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