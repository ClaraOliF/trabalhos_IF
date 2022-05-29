<?php 
    // Verificando a pré-existência no DB
    $sql = "SELECT chave FROM tabela WHERE chave='{$chave}'";
    $row = mysqli_query($conn, $sql);
    if(mysqli_num_rows($row)>0){
        $resposta = "Chave ".$chave." já está cadastrada.";
    } else {
        //Cadastrando Chaves e Valores
        $sql = "INSERT INTO tabela(`chave`,`valor`) VALUES ('{$chave}','{$valor}')";
        $res = mysqli_query($conn, $sql);
        $resposta = "Nova chave foi cadastrada com sucesso.";
    }  
    mysqli_close($conn);    
    header("Location:index.php?resp=$resposta");
?>