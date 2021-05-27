<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$senha2 = $_POST["senha2"];
$uf = $_POST["uf"];
$eletrodomestico = $_POST["eletrodomestico"];
$login = $_POST["login"];
$id = $_POST["id"];
$count = count($eletrodomestico);
//echo $count . '<br>';
/* if (!empty($_POST["eletrodomestico"])) {
  foreach ($eletrodomestico as $check) {
  echo $check;
  }
  } */
include "config.php";



if ($senha == $senha2) {
    $querydel = "delete from eletrodomestico_has_usuario where idusuario=" . $id . ";";
    $resultdel = $CONEXAO->query($querydel);

    $query = "UPDATE usuario SET nome='" . $nome . "', senha='" . $senha . "', email='" . $email . "', login='" . $login . "', estado='" . $uf . "' WHERE idusuario=" . $id . ";";
    $result = $CONEXAO->query($query);

    $queryEletrodomestico = "INSERT INTO eletrodomestico_has_usuario(ideletrodomestico,idusuario) VALUES ";
    $i = 0;
    foreach ($eletrodomestico as $check) {

        $i = $i + 1;
        if ($i != $count) {
            $queryEletrodomestico .= "(" . $check . "," . $id . "),";
        } else {
            $queryEletrodomestico .= "(" . $check . "," . $id . ")";
        }
    }

    $queryEletrodomestico .= ";";
    //die($queryEletrodomestico);
    $resultadoEletrodomestico = $CONEXAO->query($queryEletrodomestico);

    $CONEXAO->close();
    if ($result&&$resultadoEletrodomestico) {

         header("refresh:0;url=paginausuario.php");
    } else {
        echo 'ERRO ';
    }
} else {
    echo" senhas diferentes";
    header("refresh:3;url=update.php");
}
?>







