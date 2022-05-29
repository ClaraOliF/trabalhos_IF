<?php 
    require_once "conexao.php";
    $chave = trim($_POST['chave']);
    $valor = trim($_POST['valor']);

    switch ($_REQUEST['submit']){
        case 'cadastrar':
            if(!empty($chave) & !empty($valor)){
                include_once "insert.php";    
            } else {
                $resposta = "Preencha ambos os espaços para realizar o cadastro.";
                header("Location:index.php?resp=$resposta");
            } break;
        
        case 'buscar':
            if(!empty($chave)){
                include_once "read.php";   
            } else {
                $resposta = "É necessário indicar a chave do valor que se deseja encontrar.";
                header("Location:index.php?resp=$resposta");
            } break;

        case 'atualizar':
            if(!empty($chave) & !empty($valor)){
                include_once "update.php";   
            } else {
                $resposta = "Preencha ambos os espaços para realizar a atualização de dados.";
                header("Location:index.php?resp=$resposta");
            } break;  
            
        case 'deletar':
            if(!empty($chave)){
                include_once "delete.php";   
            } else {
                $resposta = "É necessário indicar a chave que se deseja deletar.";
                header("Location:index.php?resp=$resposta");
            } break;
    }
?>