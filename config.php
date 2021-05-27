<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//nome do servidor (localhost)
$SERVIDOR = "localhost";
//usuário do banco de dados
$USER = "root";
//senha do banco de dados
$SENHA = "root";
//nome da base de dados
$DB = "tcc";

$CONEXAO = mysqli_connect($SERVIDOR, $USER, $SENHA, $DB,3306);
if (!$CONEXAO) {
    echo "Erro: Não foi possível conectar ao MySQL.<br/>";
    echo "Código de erro: " . mysqli_connect_errno() . "<br/>";
    echo "Erro: " . mysqli_connect_error() . "<br/>";
    exit;
}
