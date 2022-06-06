<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    require_once "conexao.php";
    require_once "funcoes.php";
    $sql = "SELECT * FROM bolos";
    $resultado =  mysqli_query($conn, $sql);
    if(!empty($resultado)){
        while($row = mysqli_fetch_assoc($resultado)) {
            foreach($row as $chave => $valor){
                if($chave == $row['imagem']){
                    echo "<tr>
                            <th>".$chave."</th>
                            <th><img src='imagens/". $row['imagem']."'/></th>
                        </tr>";
                } elseif($chave=='ID'){
                    $linha_id = $valor;
                    echo "<tr>
                            <th><strong>".$chave."</strong></th>
                            <th>".$valor."</th>
                        </tr>";
                }
                else {
                    echo "<tr>
                            <th><strong>".$chave."</strong></th>
                            <th>".$valor."</th>
                        </tr>";
                   }
            }
            // Adicionando botões de DELETAR e EDITAR
            //echo "<tr>
                    //<th>
                       // <a href='deletar.php?id=".$linha_id."'>
                        //q<button>Deletar</button>
                   // </th>";
            //echo   "<th>
                       // <a href=header("Location:editar.php?id='.$linha_id.")>
                        //<button>Editar</button></a>
                    //</th>
                //</tr>";
        } 
    } else {
        echo "Ainda não existe nenhum produto cadastrado";
    }  
    mysqli_close($conn);
    ?>
</body>
</html>
