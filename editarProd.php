<?php
session_start();

include_once("conexao.php");

//$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idProduto = $_GET['id'];
$result_usuario = "SELECT * FROM produtos WHERE pk_prod = '$idProduto'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

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
					<img src="images/img-01.png" alt="IMG">
				</div>
    <h1 style="font-style: italic; text-align:center;">Loja FormPhp</h1>


    <h1>Editar Usuário</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="proc_edit_usuario.php">
        <input type="hidden" name="id" value="<?php echo $row_usuario['pk_prod']; ?>">
        <label>Marca: </label>
        <input type="text" name="marcaProd" placeholder="Digite a marca do produto" value="<?php echo $row_usuario['marca_prod']; ?>"><br><br>
        <label>Modelo: </label>
        <input type="text" name="modelProd" placeholder="Digite o modelo do produto" value="<?php echo $row_usuario['mod_prod']; ?>"><br><br>
        <label>Cor: </label>
        <input type="text" name="corProd" placeholder="Digite o modelo do produto" value="<?php echo $row_usuario['cor_prod']; ?>"><br><br>
        <label>Preço: </label>
        <input type="number" name="precoProd" placeholder="Digite o modelo do produto" value="<?php echo $row_usuario['preco_prod']; ?>"><br><br>
        <input type="submit" value="Editar">
        <button><a href="verificar.php">Voltar á página inicial</a></button>

    </form>
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