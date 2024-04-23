<?php
session_start();
include_once("conexao.php");

//print_r($_REQUEST);

//$registroDel = filter_input(INPUT_POST, 'registroDel', FILTER_SANITIZE_NUMBER_INT);
$registroDel = $_POST["registroDel"];
echo $registroDel;

if (!empty($registroDel)) {
    $result_produto = "DELETE FROM produtos WHERE pk_prod ='$registroDel'";
    $resultado_produto = mysqli_query($conexao, $result_produto);
    $row = mysqli_fetch_assoc($resultado_produto);

    if (mysqli_affected_rows($conexao)) {
        $_SESSION['msg'] = "<div'><p style='color:green; text-align:center; font-size: 30px; font-weight: bold;'>Exclusão realizada com sucesso!</p></div>";
        header("Location: cadastro.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red; text-align:center; font-size: 30px; font-weight: bold;'>Erro ao excluir, código informado não existe! :(</p>";
        header("Location: cadastro.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red; text-align:center; font-size: 30px; font-weight: bold;'>É necessario informar o código do produto :(</p>";
    header("Location: verificar.php");
}
