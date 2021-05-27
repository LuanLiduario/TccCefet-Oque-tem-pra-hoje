<?php
session_start();
if (!isset($_SESSION['id'])) {
    
} else {
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
}
?>
<!DOCTYPE html>
<html>
     <head>
        <title>Receitas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <style>
        *{font-family:"Helvetica";
          font-size: 14px;}

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:hover,
        .navbar-inverse .navbar-nav>.active>a:focus {
            color: #3eb2ff;
            background-color: #ffa726
        }
        /*Letra do menu Receita*/
        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>.active>a:focus {
            color: #01070b;
            background-color: #F57C00;
        }
        #k:focus {
            background-color: #ffa726;}

        .dropdown-menu:onclick{
            background-color: aqua;
            color: aqua;
        }
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }
        .dropdown-menu a:hover{
            background-color: #18056C;
            color: aqua;
        }
        body,h1,h2,h3,h4,h5,h6 {
            font-family: "Karma", sans-serif
        }
        .w3-bar-block .w3-bar-item {
            padding:20px
        }

        footer {
            background-color: #F57C00;
            color: #f5f5f5;
            padding: 25px;
        }

        footer a {/*setinha para subir ao topo*/
            color: #f5f5f5;
        }
        .navbar-header>.navbar-toggle:hover,
        .navbar-header>.navbar-toggle:focus {
            color: #01070b;
            background-color: #ffa726;
        }
        footer a:hover {
            color: #777;
            text-decoration: none;
        }


        .navbar {
            margin-bottom: 0;
            background-color: #F57C00;
        }
        .navbar li a, .navbar .navbar-brand {/*COR DAS LETRA DOS BOTAO*/
            color: #fff !important;
        }
        .navbar-nav li a:hover {
            color: #ffd95b!important;
        }
        .panel-group{
            width: 500px;
            height: 600px;
        }
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }
        .col-sm-6{
            padding: 30px;
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
                        <li class="active"><a href="receitas.php">Receitas</a></li>
                        <li><a href="comof.php">Como funciona</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($nome)) {
                            $id = $_SESSION["id"];
                            $nome = $_SESSION["nome"];
                            ?> <li><a href="paginausuario.php"><span class="glyphicon glyphicon-user"></span> Olá <?= $nome ?> </a></li><?php
                            } else {
                                ?><li><a href="cadastra.php"><span class="glyphicon glyphicon-user"></span> Junte-se a nós</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="w3-main w3-content w3-padding" style="max-width:1200px;min-height:300px;margin-top: 3%">
            <div class='w3-row-padding w3-padding-16 w3-center'id="food" >
                <?php
                include "config.php";

                $sql = "select nome from receita";

                $result = $CONEXAO->query($sql);


                while ($row = mysqli_fetch_assoc($result)) {


                    echo "  <div class='w3-quarter'> <h3><a href = 'receitaprocessa.php?receita=" . $row["nome"] . "'>" . $row["nome"] . "</a></h3>
                        <p>Descrição da </p>
                        <p>receita</p>          
                        <br/> </div>";
                }
                ?>
            </div></div>

        <footer class="text-center">
            <a class="up-arrow" href="receitas.php" data-toggle="tooltip" title="Para o topo">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>

            <p>Copyright © 2017 | GKL </p>

        </footer>

        <script>
            $(document).ready(function () {
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();
            })
        </script>  

    </body></html>


