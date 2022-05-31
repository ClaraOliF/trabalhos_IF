<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
</head>
<body>

    <h1>Adicionando outro item ao catálogo de produtos</h1>

    <?php
        require_once "conexao.php";  
    ?>

    <form action="' . $_SERVER['PHP_SELF'] . '" method="post" name="cadastro">
        <!--inserir imagem-->
        <label for="produto">
            Produto: <input type="text" name = "produto">
        </label>
        <label for="preco">
            Preço: <input type="text" name = "preco">
        </label>
        <label for="fatias">
            Fatias: <input type="number" name = "fatias">
        </label>
        <label for="data">
            Data: <input type="date" name = "data">
        </label>
        <label for="descricao">
            Descricão: <input type="textfield" name = "produto">
        </label>
        <label for="categorias">
            Escolha a categoria: <input type="radio" name="categorias">
        </label>

        <input type="submit" value="Criar">
        <a href="index.php"><button>Cancelar</button></a>
        
    </form>

    <!--
    validar entradas de input
    encerrar conexão
    -->
</body>
</html>
