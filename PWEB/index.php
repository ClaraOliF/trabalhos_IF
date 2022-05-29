<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Chaves e Valores</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div>
        <form action="analise.php" method="post" id="form"> 
            <label for="chave"> 
                Insira a chave  <br><input type="text" name="chave"><br>
            </label>

            <button type="submit" name="submit" value="buscar">Buscar</button>
            <button type="submit" name="submit" value="deletar">Deletar</button>

            <label for="valor"> 
            <br>  Insira o valor <br><input type="text" name="valor"><br>
            </label>
            
            <button type="submit" name="submit" value="cadastrar">Cadastrar</button>
            <button type="submit" name="submit" value="atualizar">Atualizar</button>
        </form>

        <?php
        if(isset( $_GET['resp'])){
            $resp = $_GET['resp'];
            echo '<div><h1><strong/>'.$resp.'</strong></h1></div>';
        }    
        ?>
    </div>
</body>
</html>