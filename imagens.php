<html>
    <head>
        <title>Basic Upload</title>
    </head>
    <body>
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileUpload">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php
if (isset($_FILES['fileUpload'])) {
    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

    $ext = strtolower(substr($_FILES['fileUpload']['name'], 0)); //Pegando extensão do arquivo
    $dir = 'uploads/'; //Diretório para uploads

    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir . $ext); //Fazer upload do arquivo
}



?>