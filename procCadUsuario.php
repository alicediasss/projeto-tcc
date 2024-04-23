<?php
session_start();
include_once("conexao.php");

$nomeUsuario = $_POST["nome"];
$senhaUsuario = $_POST["password"];
$emailUsuario = $_POST["email"];

$queryCad = "INSERT INTO _usuarios (login_nome, senha, email)
        VALUES ('$nomeUsuario', '$senhaUsuario', '$emailUsuario')";

$result_queryCad = mysqli_query($conexao, $queryCad);

if ($result_queryCad) {
    $_SESSION['msg'] = "<div'><p style='color:green; text-align:center; font-size: 30px; font-weight: bold;'>Cadastro realizado com sucesso!</p></div>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red; text-align:center; font-size: 30px; font-weight: bold;'>Erro, problema ao cadastrar :(</p>";
    header("Location: index.php");
}
