<?php

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$senha2 = $_POST["senha2"];
$uf = $_POST["uf"];
$eletrodomestico = $_POST["eletrodomestico"];
$login = $_POST["login"];
$count = count($eletrodomestico);
//echo $count . '<br>';
 
include "config.php";

$querylogin = "select login from usuario";
$resultadologin = $CONEXAO->query($querylogin);

if ($resultadologin) {

    while ($row = $resultadologin->fetch_assoc()) {
     
        if ($row["login"] == $login) {
           
            header("refresh:3;url=cadastra.php");
            die (" nome de usuario já utilizado");
        }
    }

    if ($senha == $senha2) {

        $query = "INSERT INTO usuario(nome,senha,email,estado,login) VALUES('" . $nome . "','" . $senha . "','" . $email . "','" . $uf . "','" . $login . "');";
        $resultado = $CONEXAO->query($query);
        
        if (!empty($_POST["eletrodomestico"])) {
  
  

        $queryID = mysqli_insert_id($CONEXAO);

        $queryEletrodomestico = "INSERT INTO eletrodomestico_has_usuario(ideletrodomestico,idusuario) VALUES ";

        $i = 0;
        foreach ($eletrodomestico as $check) {
            //$queryEletrodomestico .= "(" . $check . "," . $queryID . ")";
            $i = $i + 1;
            if ($i != $count) {
                $queryEletrodomestico .= "(" . $check . "," . $queryID . "),";
            } else {
                $queryEletrodomestico .= "(" . $check . "," . $queryID . ")";
            }
        }

        $queryEletrodomestico .= ";";
        //die($queryEletrodomestico);
        $resultadoEletrodomestico = $CONEXAO->query($queryEletrodomestico);}
        $CONEXAO->close();
        if ($resultado) {

            header("refresh:0;url=login.php");
        } else {
            echo 'ERRO no cadastro';
        }
    } else {
        echo" senhas diferentes";
        header("refresh:3;url=cadastra.php");
    }
} else {
    die("ERRO no login");
}
?>

