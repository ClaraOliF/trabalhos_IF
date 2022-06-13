<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
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
                   echo "<div class='catalogo'>
                        <tr>
                            <th><?php echo $chave ?></th>
                            <th><img src='/imagens/".$valor."'></th>
                        </tr>";
                    
                } elseif($chave=='ID'){
                    $linha_id = $valor;
                    echo "<tr>
                            <th><strong>". $chave."</strong></th>
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

        // Adicionando botão de DELETAR 
        echo "<tr><th><form action='delete.php' method='post'>
                <button type='submit' name='id' value=".$linha_id.">Deletar</button>
                </form><th>";
        // Adicionando botão de EDITAR
        echo "<th><form action='editar.php' method='post'>
                <button type='submit' name='id' value=".$linha_id.">Editar</button>
                </form><th></tr>
                </div>" ;
                    
        } 
    }else {
        echo "Ainda não existe nenhum produto cadastrado";
    }  

    mysqli_close($conn);
    ?>
</body>
</html>
