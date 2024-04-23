<?php

session_start();

include_once("conexao.php");

if ((isset($_POST['usuario'])) && (isset($_POST['password']))) {
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $senha = mysqli_real_escape_string($conexao, $_POST['password']);

    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $result_usuario = "SELECT * FROM _usuarios WHERE login_nome = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    if (isset($resultado)) {
        $_SESSION['usuarioID'] = $resultado['id_usuario'];
        $_SESSION['usuarioNome'] = $resultado['login_nome'];
        $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
        $_SESSION['usuarioEmail'] = $resultado['email'];

        Header("Location: home.php");

        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
    } else {
        //Váriavel global recebendo a mensagem de erro
        $_SESSION['loginErro'] = "<div style='color:red;'>Usuário ou senha Inválidos";
        header("Location: index.php");
    }
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: index.php");
}
