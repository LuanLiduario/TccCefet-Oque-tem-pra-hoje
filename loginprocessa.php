<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

include "config.php";

$query = "select * from usuario where email='" . $email . "' and senha='" . $senha . "';";
$result = $CONEXAO->query($query);

if (mysqli_num_rows($result) == 1) {
    session_start();

   // echo "session iniciado";
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;


    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['nome'] = $row["nome"];
            $_SESSION['id'] = $row["idusuario"];
            $_SESSION['estado'] = $row["estado"];
            $_SESSION['login'] = $row["login"];
            $_SESSION['senha'] = $row["senha"];
        }
    }
    header("refresh:0;url=paginausuario.php");
} else {
    
   echo "<h1 style='text-align:center;'>Login ou senha incorretos</h1>";
     header("refresh:2;url=login.php");
}
?>