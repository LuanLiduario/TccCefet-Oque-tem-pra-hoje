<?php
session_start();
if (isset($_SESSION['id'])) {
    header("refresh:0;url=index.php");
}
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Cadastrar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        *{
            font-family:"Helvetica";
        }
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #FFF;
        }
        #k:focus {
            background-color: #ffa726;}

        .navbar-header>.navbar-toggle:hover,
        .navbar-header>.navbar-toggle:focus {
            color: #01070b;
            background-color: #ffa726;
        }
        #b{background-color: #ffa726}

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        /*Barra de navegação*/
        .navbar {
            margin-bottom: 0;
            background-color: #F57C00;
        }
        .navbar li a, .navbar .navbar-brand {/*COR DAS LETRA DOS BOTAO*/
            color: #fff !important;
        }
        .navbar-nav li a:hover {
            color: #fff !important;
        }
        .panel-group{
            width: 500px;
            height: 600px;
        }
        .col-sm-6{
            padding: 30px;
        }
        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:hover,
        .navbar-inverse .navbar-nav>.active>a:focus {
            color: #5387AD;
            background-color: #ffa726
        }
        /*Letra do menu Receita*/
        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>.active>a:focus {
            color: #01070b;
            background-color: #ffa726;
        }
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }

        footer {
            background-color: #F57C00;
            color: #f5f5f5;
            padding: 25px;
        }

        footer a {/*setinha para subir ao topo*/
            color: #f5f5f5;
        }

        footer a:hover {
            color: #777;
            text-decoration: none;
        }
    </style>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">O que tem pra hoje ?</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="receitas.php">Receitas</a></li>
                        <li><a href="comof.php">Como funciona</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="cadastra.php"><span class="glyphicon glyphicon-user"></span> Junte-se a nós</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 

                    </ul>
                </div>
            </div>
        </nav>


        <div class="container" style="min-height: 600px;" >

            <form class="form-signin" action="insert_processa.php"  method="post" id="form">
                <h2 class="form-signin-heading">Cadastro</h2>
                <label for="inputNome" class="sr-only">Digite seu nome:</label>
                <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Informe seu nome" required autofocus>
                <label for="inputLogin" class="sr-only">Digite seu usuário:</label>
                <input type="text" name="login" id="inputLogin" class="form-control" placeholder="Informe seu nome de usuário" required autofocus>

                <label for="inputEmail" class="sr-only">Digite seu e-mail:</label>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Informe seu mail" required autofocus>
                <label for="inputPassword" class="sr-only">Digite sua senha:</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Escolha uma senha" required>
                <label for="inputPassword" class="sr-only">Confirme sua senha:</label>
                <input id="confirmpassword" name="senha2" name="confirmpassword" type="password" placeholder="Confirme sua senha" class="form-control input-md" required="">
                <span class="help-block"></span>
                <label>Informe os eletrodomésticos que possui:</label>
                <div class="checkbox">
                    <label>
                        <?php
                        include "config.php";

                        $query = "SELECT * FROM eletrodomestico";
                        $resultado = $CONEXAO->query($query);

                        if ($resultado) {
                            while ($linha = $resultado->fetch_assoc()) {
                                echo("<input type='checkbox' name='eletrodomestico[]' value='" . $linha["ideletrodomestico"] . "'>" . $linha["nome"] . "</input><br/>");
                            }
                        } else {
                            die("ERRO");
                        }

                        $CONEXAO->close();
                        ?>

                    </label>
                </div>  
                <label>Informe seu estado:</label>

                <select name="uf">
                    <option name="uf"> MG
                    <option name="uf"> SP
                    <option name="uf"> RJ
                </select>
                <br><br>

                <button id= "b" class="btn btn-lg btn-primary btn-block" type="submit" name="b">Cadastrar</button>
            </form>

        </div> <!-- /container -->
    </body>
    <footer class="text-center">
        <a class="up-arrow" href="cadastra.php" data-toggle="tooltip" title="Para o topo">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Copyright © 2017 | GKL </p>
    </footer>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</html>
