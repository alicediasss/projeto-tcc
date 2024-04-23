<?php
session_start();

include_once("conexao.php");
//print_r($_REQUEST);
//exit;

$idProduto = $_POST['id'];
$marcaProd = $_POST['marcaProd'];
$modelProd = $_POST['modelProd'];
$corProd = $_POST['corProd'];
$precoProd = $_POST['precoProd'];

$result_usuario = "UPDATE produtos SET marca_prod = '$marcaProd' , mod_prod='$modelProd', cor_prod='$corProd', preco_prod='$precoProd', modified=NOW() WHERE pk_prod = '$idProduto'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

/*
$result_usuario = "UPDATE _usuarios SET nome='$nome', email='$email', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

*/

if (mysqli_affected_rows($conexao)) {
    $_SESSION['msg'] = "<div'><p style='color:green; text-align:center; font-size: 30px; font-weight: bold;'>Produto editado com sucesso!</p></div>";
    header("Location: verificar.php");
} else {
    $_SESSION['msg'] = "<p style='color:red; text-align:center; font-size: 30px; font-weight: bold;'>Erro, não foi possível editar! :(</p>";
    header("Location: verificar.php?id=$idProduto");
}
