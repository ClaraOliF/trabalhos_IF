<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Enviar mensagem</title>
</head>
<body>
    <h1>Enviado mensagem</h1>

    <?php
    //require_once "funcoes.php";
    //error_reporting(E_ERROR | E_PARSE);

        if(isset($_POST['id'])){
            $id = $_POST['id'];
            echo $id;}
    ?>

<form action="" method="post" name="envio_msg" enctype="multipart/form-data">

    <!-- Exibir imagem selecionada e nome do produto-->
    <!-- data que o pedido foi feito e a data de entrega-->
    <!-- dados de contato: nome do cliente, números(telefone e whatsapp) e email-->
    <!-- PERGUNTAS: do que gostou? o qu emudar? ual o tema? o que no topo? obs geral.-->
    <!-- Enviar imagem referencia-->
    <!-- NEMN TODOS OS CAMPOS SÃO OBRIGATÓRIOS-->
    <label for="pic" class="inserir">
        Enviar imagem: <input type="file" name="pic" accept="image/*">
    </label>   
    <label for="produto" class="inserir">
        Produto: <input type="text" name="produto">
    </label>
    <label for="descricao" class="inserir ">
        Descricão: <input type="textfield" name="descricao">
    </label>
    <label for="preco" class="inserir">
        Preço: <input type="number" step=0.01 min=0 name="preco">
    </label>
    <label for="fatias"class="inserir" >
        Fatias: <input type="number" min=0 name="fatias">
    </label>
    <label for="tempo" class="inserir">
        Tempo mínimo de preparo(Em dias): <input type="number" min=0 name="tempo">
    </label>

    <input type="hidden" name='' value=''>

    <input type="submit" value="Adicionar"> 
</form>
    <a href="index.php"><button>Cancelar</button></a>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = trim($_POST['produto']);
        $descricao = trim($_POST['descricao']);
        $preco = trim($_POST['preco']);
        $fatias = trim($_POST['fatias']);
        $tempo = trim($_POST['tempo']);
        $inclusao = date("m.d.y"); 
        $categoria = $_POST['categoria'];
        $img = $_FILES['pic'];

        // Validação de dados
        if(!empty($produto) && !empty($descricao) && !empty($preco) && !empty($fatias) 
        && !empty($tempo) && !empty($inclusao) && !empty($categoria) && !empty($_FILES['pic'])) {

            if ($_FILES['pic']["size"] <= 20000000) { // Verificand o tamanho do arquivo 
                $ext = strtolower(pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION));
                if($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "webp"){
                    $new_name = date("Y-m-d_H-i-s").".".$ext; //Definindo um novo nome para o arquivo
                    $dir = './imagens/'; //Diretório para uploads 
                    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
                    $img = $new_name;
                    // Enviando dados para cadastro
                    cadastro($img, $produto, $descricao, $preco, $fatias, $tempo, $categoria, $inclusao);
                    header('Location:index.php');
                } else{
                    echo "Formato de arquivo inválido!";
                }
            } else {
                echo "Arquivo de Imagem grande demais.";
            }
        } else {
            echo "Preencha todos os campos para que o produto possa ser criado!";
        } 
    }
    ?>   
</body>
</html>