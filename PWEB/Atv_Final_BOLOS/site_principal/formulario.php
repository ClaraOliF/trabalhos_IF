<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Enviar mensagem</title>
</head>
<body>
    <h1>Enviando Pedido</h1>

    <!-- 
    <?php
    //require_once "funcoes.php";
    //error_reporting(E_ERROR | E_PARSE);

        if(isset($_POST['id'])){
            $id = $_POST['id'];
            echo $id;}
    ?>
    $img_prod = array();
    $img_prod = push(selecionar_img_prod($id));
    Exibir imagem selecionada e nome do produto
    echo "Pedido do ".$img_prod[0].">";
    echo "<img href=".$img_prod.[1].">";
    e talvez outras informações tbm
    -->

<form action="" method="post" name="envio_msg" enctype="multipart/form-data">
    <!-- Informações de contato obrigatórias-->
    <label for="nome" class="inserir">
        *Seu nome: <input type="text" name="nome"><br>
    </label>
    <label for="numero" class="inserir ">
        *Nº de contato: <input type="tel" name="numero"><br>
    </label>
    <label for="email" class="inserir">
        *Seu melhor email: <input type="email" name="email" multiple><br>
    </label>
    <label for="entrega"class="inserir" >
        *Data de entrega: <input type="date" name="entrega"><br>
    </label>

    <!-- Perguntas sobre customização do bolo opcionais-->
    <label for="gostou" class="inserir">
        Do que você gostou e deseja manter no bolo? 
        <input type="text" name="gostou">
    </label>
    <label for="mudar" class="inserir">
        O que deseja mudar no bolo? 
        <input type="text" name="mudar">
    </label>
    <label for="tema" class="inserir">
        Qual o tema que o bolo deverá ter? 
        <input type="text" name="tema">
    </label>
    <label for="topo" class="inserir">
        O que deve haver no topo do bolo? 
        <input type="text" name="topo">
    </label>
    <label for="obs_geral" class="inserir">
        Outras observações: 
        <input type="text" name="obs_geral">
    </label>
    
    <!-- Enviar imagem referencia-->
    <label for="pic" class="inserir">
        Imagem referência: <input type="file" name="pic" accept="image/*">
    </label> 

    <input type="hidden" name='' value='VALOR $ID PHP AQUI'>

    <input type="submit" value="Adicionar"> 
</form>
    <a href="index.php"><button>Cancelar</button></a>

    <!--Validação do dados e envio por funcao_enviar()
    Ao se enviar é definido na funçãoo valor 
    $data =  data e hora de envio do pedido-->

<?php
    if(isset($_POST['id'])){ 
        // Se os campos obrigatórios estiverem todos preenchidos      
        if(!empty($_POST['nome']) && !empty($_POST['numero']) && !empty($_POST['email']) && !empty($_POST['entrega'])){

            // Verificando se a imagem referencia foi enviada
            if(!empty$_FILES['pic']){            
                
                // Verificando tamanho
                if($_FILES['pic']["size"] <= 20000000 && $_FILES['pic']["size"] != 0){
                    $ext = strtolower(pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION));

                    // Verificando formato
                    if($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "webp"){
                        $new_name = date("Y-m-d_H-i-s").".".$ext; //Definindo um novo nome para o arquivo
                        $dir = './imagens/'; //Diretório para uploads
                        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo                   
                        $img = $new_name;
                        // ENVIAR DADOS COM IMAGEM NOVA PRESENTE E VALIDADA
                        enviar($img, $produto, $descricao, $preco, $fatias, $tempo, $categoria,$id);
                        header("Location:index.php?");
                    } else{echo 'Favor enviar formato de imagem válido(jpeg,png ou webp).'; }
                }  else {echo 'Tamanho inválido.';}  
            } else {
                // ENVIAR DADOS SEM IMAGEM NOVA 
                update($img, $produto, $descricao, $preco, $fatias, $tempo, $categoria,$id);
                header("Location:index.php?");
            }
        } else {echo 'Preencha todos os campos obrigatórios para um melhor atendimento.'}
    } else {echo 'id do produto escolhido não identificado.';}       
?>
</body>
</html>
