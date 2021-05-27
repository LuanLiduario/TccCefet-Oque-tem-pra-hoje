<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        *{
            font-family:"Helvetica";}
        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:hover,
        .navbar-inverse .navbar-nav>.active>a:focus {
            color: #5387AD;
            background-color: #ffa726
        }
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }
        #k:focus {
            background-color: #ffa726;}
        #b{background-color: #ffa726}

        .navbar-header>.navbar-toggle:hover,
        .navbar-header>.navbar-toggle:focus {
            color: #01070b;
            background-color: #ffa726;
        }
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

        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ffF;
        }

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
                           <?php if(isset($nome)){
                            ?> <li><a href="paginausuario.php"><span class="glyphicon glyphicon-user"></span> Olá <?= $nome ?> </a></li><?php
                        }else
                        {  ?><li><a href="cadastra.php"><span class="glyphicon glyphicon-user"></span> Junte-se a nós</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> <?php } ?>
                        
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container" style="margin-top:10%; min-height: 400px;">

            <form class="form-signin" method="post" action="loginprocessa.php">
                <h2 class="form-signin-heading">Entrar</h2>
                <label for="inputEmail" class="sr-only">Digite seu e-mail:</label>
                <input type="email" id="email" class="form-control" placeholder="Email" required autofocus name="email">
                <label for="inputPassword" class="sr-only" >Digite sua senha:</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar-me
                    </label>
                </div>
                <button id="b" class="btn btn-lg btn-primary btn-block" type="submit">Fazer Login</button>
            </form>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
<footer class="text-center">
    <a class="up-arrow" href="login.php" data-toggle="tooltip" title="Para o topo">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Copyright © 2017 | GKL </p>
</footer>