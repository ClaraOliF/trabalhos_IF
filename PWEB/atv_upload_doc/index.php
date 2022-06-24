<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Upload de Documentos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
    <form action='' method='post'enctype='multipart/form-data'>
        <label for='pic' class='inserir' >
            <h2>Enviar documento: </h2>
            <div class='pic'><input type='file' name='pic' accept='image/*'></div>
        </label> <br><br>
        <input type="submit" value="Fazer Upload">  
    </form>

    <?php 
        if (isset($_FILES['pic'])){

            if($_FILES['pic']["size"] == 0){
        
            if ($_FILES['pic']["size"] <= 16000000) { 
                $ext = strtolower(pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION));
                if($ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "txt"){
                    $new_name = date("Y-m-d_H-i-s").".".$ext; 
                    $dir = './docs/';
                    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name);  
                    echo '<div class="resp">Upload de arquivo realizado com sucesso!<div';
                                 
                } else {
                    echo '<div class="resp">Formato de arquivo inválido.<div';
                }
            }  else {
                echo '<div class="resp">Tamanho inválido de arquivo.<div>';
            }
        }
    } 
    ?>

</body>
</html>