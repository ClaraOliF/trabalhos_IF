<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editando Produto</title>
</head>
<body>
    <?php 
        if(isset($_POST['id'])){
            $id = $_POST['id'];

        require_once "funcoes.php";

        $produto_info = select_by_id($id);
        
        echo "<h1>Edição de Produto - ".$produto_info[1]." [Id:".$produto_info[8]."]</h1>
        <p>Apenas os espaços preenchidos serão atualizados!</p>";
        }
    ?>

        <form action="edit_valid.php" method="post" name="cadastro_produto" enctype="multipart/form-data">
        <label for="pic" class="inserir">
            Enviar nova imagem: <input type="file" name="pic" accept="image/*">
        </label>  

        <label for='produto' class='inserir'>
            Novo nome do produto: <input type='text' name='produto'>
        </label> ";
        
        <label for="descricao" class="inserir ">
            Nova descricão: <input type="textfield" name="descricao">
        </label>
        <label for="preco" class="inserir">
            Novo preço: <input type="number" step=0.01 min=0 name="preco">
        </label>
        <label for="fatias"class="inserir" >
            Mudar nº Fatias: <input type="number" min=0 name="fatias">
        </label>
        <label for="tempo" class="inserir">
            Tempo mínimo de preparo(Em dias): <input type="number" min=0 name="tempo">
        </label>

    <?php
    //Inserindo categorias
        require_once 'funcoes.php';
        $resposta = take_tags();
        while ($row = mysqli_fetch_assoc($resposta)) {
            $categoria = $row['nome'];
            echo "<input type='radio' name='categoria' value=$categoria>
            <label for='categoria'>$categoria</label><br>";
            }
        echo "<input type='hidden' name='id' value=".$id."></input>";
    ?>
        <input type="submit" value="Adicionar">
    </form>
        <a href="index.php"><button>Cancelar</button></a>    
</body>
</html>
