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
        $valores = select_by_id($id);
        
        if(empty($_POST['produto'])){
            $produto = $valores[1] ;
        } else{
            $produto = $_POST['produto'];
        }

        if(empty($_POST['descricao'])){
            $descricao = $valores[2];
        } else{
            $descricao = $_POST['descricao'];
        }

        if(empty($_POST['preco'])){
            $preco = $valores[3];
        } else{
            $preco = $_POST['preco'];
        }

        if(empty($_POST['fatias'])){
            $fatias = $valores[4];
        } else{
            $fatias = $_POST['fatias'];
        }

        if(empty($_POST['tempo'])){
            $tempo = $valores[5];
        } else{
            $tempo = $_POST['tempo'];
        }

        if(empty($_POST['categoria'])){
            $categoria = $valores[7];
        } else{
            $categoria = $_POST['categoria'];
        }

        $inclusao = date("m.d.y");

        if($_FILES['pic'] == NULL){
            $img = $valores[0];
            
        } else{
            $img = $_FILES['pic'];
            if ($_FILES['pic']["size"] <= 20000000 && $_FILES['pic']["size"] != TRUE) { // Verificand o tamanho do arquivo
                $ext = strtolower(pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION));
                if($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "webp"){
                    $new_name = date("Y-m-d_H-i-s").".".$ext; //Definindo um novo nome para o arquivo
                    $dir = './imagens/'; //Diretório para uploads
                    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo                   
                    $img = $new_name;
                }
            }    
        }        
        update($img, $produto, $descricao, $preco, $fatias, $tempo, $categoria, $inclusao,$id);
        //header('Location:index.php');
    }
?>
</body>
</html>