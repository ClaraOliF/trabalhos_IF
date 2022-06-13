<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    // Exibindo produtos
    require_once "conexao.php";
    require_once "funcoes.php";
    $sql = "SELECT * FROM bolos";
    $resultado =  mysqli_query($conn, $sql);
    if(!empty($resultado)){
        while($row = mysqli_fetch_assoc($resultado)) {
            foreach($row as $chave => $valor){
                if($chave == $row['imagem']){
                    ?>  <tr>
                            <th><?php echo $chave ?></th>
                            <th><img src='"<?php echo $row['imagem'];?>"'></th>
                        </tr>
                    <?php
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
        echo "<tr><th><form action='formulario.php' method='post'>
                <button type='submit' name='id' value=".$linha_id.">Enviar</button>
                </form><th>";
                    
        } 
    }else {
        echo "Ainda não existe nenhum produto cadastrado";
    }  

    mysqli_close($conn);
    ?>
</body>
</html>