<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
    <?php
    require_once "conexao.php";
    require_once "funcoes.php";
    $sql = "SELECT * FROM bolos";
    $resultado =  mysqli_query($conn, $sql);
    if(!empty($resultado)){
        while($row = mysqli_fetch_assoc($resultado)) {
            foreach($row as $chave => $valor){ // erro está aqui
                if($valor == $row['imagem']){
                   echo '<div>
                        <tr>
                            <td>'.$chave.'></td>
                            <td><img src="imagens/'.$valor.'"></td>
                        </tr>'; 
                    
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
            // '<tr><td><img class="img-thumbnail img-responsive" src='.$foto.' alt="Bolo de Chocolate" width="540" height="360"></td>';
        // http://127.0.0.1/bolo_pweb/index.php?
        //Adicionando botão de DELETAR 
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
