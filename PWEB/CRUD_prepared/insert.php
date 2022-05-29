<?php 
    // Verificando a pré-existência no DB
    $sql = "SELECT chave FROM tabela WHERE chave='{$chave}'";
    $row = mysqli_query($conn, $sql);
    if(mysqli_num_rows($row)>0){
        $resposta = "Chave ".$chave." já está cadastrada.";
    } else {
        //Cadastrando Chaves e Valores
        $sql = $conn->prepare("INSERT INTO tabela(`chave`,`valor`) VALUES (?,?)");
        $sql->bind_param("ss", $chave, $valor);
        $sql->execute();
        $resposta = "Nova chave foi cadastrada com sucesso.";
        $sql->close();      
    }  
    header("Location:index.php?resp=$resposta");
?>
