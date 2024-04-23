<?php
session_start();

unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioNiveisAcessoId'],
    $_SESSION['usuarioEmail'],
    $_SESSION['_usuariosenha']
);

$_SESSION['logindeslogado'] = "<div style='color:green;'>Usuário deslogado com sucesso</div>";
//redirecionar o usuario para a página de login
header("Location: index.php");
