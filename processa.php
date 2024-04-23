<?php

session_start();

include_once("conexao.php");

/* INSERINDO CLIENTES NO BANCO */
if (isset($_POST["CPF"]) && isset($_POST["nome"])) {
    $CPF = $_POST["CPF"];
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
	$rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];

    $queryProd = "INSERT INTO _clientes (CPF, nome, celular, rua, numero, bairro, cidade, estado, cep) 
                VALUES ('$CPF' ,'$nome', '$celular', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$cep')";
    $result_queryProd = mysqli_query($conexao, $queryProd);

    // Validar se cadastro foi realizado com sucesso
    if ($result_queryProd) {
        $_SESSION['msg'] = "<div'><p style='color:green; text-align:center; font-size: 30px; font-weight: bold;'>Cadastro realizado com sucesso!</p></div>";
        header("Location: verificar.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red; text-align:center; font-size: 30px; font-weight: bold;'>Erro, problema ao cadastrar :(</p>";
        header("Location: verificar.php");
    }
}

if (isset($_POST["CPFcliente"]) && isset($_POST["valor"])) {
    /* INSERINDO FORNECEDORES NO BANCO */
    $ID = $_POST["id"];
    $CPFcliente = $_POST["CPFcliente"];
    $valor = $_POST["valor"];

    $queryForn = "INSERT INTO _pedidos (id, cliente, valor) 
        VALUES ('$id', '$CPFcliente','$valor')";

    $result_queryForn = mysqli_query($conexao, $queryForn);

    // Validar se cadastro foi realizado com sucesso
    if (mysqli_affected_rows($conexao)) {
        $_SESSION['msg'] = "<div'><p style='color:green; text-align:center; font-size: 30px; font-weight: bold;'>Cadastro realizado com sucesso!</p></div>";
        header("Location: verificar_pedido.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red; text-align:center; font-size: 30px; font-weight: bold;'>Erro, problema ao cadastrar :(</p>";
        header("Location: verificar_pedido.php");
    }
}
