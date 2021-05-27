<?php
/*
session_start();
if (!isset($_SESSION['id'])) {
    header("refresh:0;url=index.php");
} else {
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
    $login = $_SESSION["login"];
    $senha = $_SESSION["senha"];
}
$assunto = $_POST["receita"];
$texto = $_POST["texto"];
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer(true);

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP

try {
    $mail->Host = 'smtp.seudominio.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Port = 465; //  Usar 587 porta SMTP
    $mail->Username = 'smtp.gmail.com '; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = ''; // Senha do servidor SMTP (senha do email usado)
    //Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
    $mail->SetFrom($email, $nome); //Seu e-mail
    $mail->AddReplyTo($email, $nome); //Seu e-mail
    $mail->Subject = $assunto; //Assunto do e-mail
    //Define os destinatário(s)
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress('luanliduario@gmail.com', 'Teste Locaweb');

    //Campos abaixo são opcionais 
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
    //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
    //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
    //Define o corpo do email
    $mail->MsgHTML($texto);

    ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
    //$mail->MsgHTML(file_get_contents('arquivo.html'));

    $mail->Send();
    echo "Mensagem enviada com sucesso</p>\n";

    //caso apresente algum erro é apresentado abaixo com essa exceção.
} catch (phpmailerException $e) {
    echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}*/
//echo "<h1 style='text-align:center;'>Receita encaminhada para análise, muito obrigado !</h1>";
     //header("refresh:2;url=index.php");
?>
<?php
session_start();
if (!isset($_SESSION['id'])) {
    
} else {
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
}
?>
<html >
    <head>
        <title>O que tem pra hoje ?</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        *{
            font-family:"Helvetica";}
        /*body{
         height: 900px; 
          
        }*/
        .dropdown-menu{
            color:#000;
            background-color: #ffa726;
        }
        div{
            width: auto;
        }
        .navbar-header>.navbar-toggle:hover,
        .navbar-header>.navbar-toggle:focus {
            color: #01070b;
            background-color: #ffa726;
        }
        #k:focus {
            background-color: #ffa726;}

        div:a{
            width: 50px;
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



        .navbar  {
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
        #geladeira{
            width: 60%;
            height: 70%;
            float: center;
        }
        footer {
            background-color: #F57C00;
            color: #f5f5f5;
            padding: 25px;
            /*height: 130px;*/
        }

        footer a {/*setinha para subir ao topo*/
            color: #f5f5f5;
        }

        footer a:hover {
            color:  #777;
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

        <div class="container" style="margin-top:60px; min-height: 500px;text-align:center" >
            <?php
            echo "<h1 style='text-align:center;'>Receita encaminhada para análise, muito obrigado !</h1>";
     header("refresh:2;url=index.php");
     
?>
            
        <img src="joinha.png" id="geladeira">

        </div>


    </body>

    <footer class="text-center">
        <a class="up-arrow" href="index.php" data-toggle="tooltip" title="Para o topo">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>

        <p>Copyright © 2017 | GKL </p>

    </footer>

</html>

<script>
    $(document).ready(function () {
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>  

