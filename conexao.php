<?php
//ini_set('display_errors',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);
// definições de host, database, usuário e senha

$host = "localhost";
$db   = "formphp";
$user = "root";
$pass = "";

//$conexao = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
$conexao = new mysqli($host, $user, $pass, $db);
if ($conexao->connect_errno) {
    printf("Erro de conexão com localhost, o seguinte erro ocorreu: %s\n", $mysqli->connect_error);
    exit();
}
$conexao->set_charset("utf8");
