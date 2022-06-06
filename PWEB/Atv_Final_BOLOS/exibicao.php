<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    require_once "conexao.php";
    $sql = "SELECT * FROM bolos";
    $resultado =  mysqli_query($conn, $sql);
    if(!empty($resultado)){
        while($row = mysqli_fetch_assoc($resultado)) 
        foreach($row as $chave => $valor){
            if($chave == $row['imagem']){
                echo "<tr><th>".$chave."</th><th><img src=". $row['imagem']."></th></tr>";
           }else {
                echo "<tr><th>".$chave."</th><th>".$valor."</th></tr>";
           }
           // Adicionando botões de DELETAR e EDITAR
           //<a href="<?php require 'funcoes.php';deletar();?>" ><button>Deletar</button></a>
           //<a href="<?php require 'funcoes.php';editar();?>" ><button>Editar</button></a>
        }
        
    } else {
        echo "Ainda não existe nenhum produto cadastrado";
    }  
    mysqli_close($conn);
    ?>
</body>
</html>
