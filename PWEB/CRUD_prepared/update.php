<?php 
    // Update de valores
    $sql = "SELECT chave,valor FROM tabela WHERE chave='{$chave}'";
    $row =  mysqli_fetch_assoc(mysqli_query($conn, $sql));
    if(!empty($row)){
        if($row['valor']===$valor){
            $resposta = "O valor ".$valor." já está cadastrado nesta chave.";
        } else {
            $sql = $conn->prepare("UPDATE tabela SET valor=? WHERE chave='{$chave}'");
            $sql->bind_param("s", $valor);
            $sql->execute();
            $resposta = "Novo valor foi atualizado.";
        }               
    } else {
        $resposta = "A chave ".$chave." não está cadastrada em nosso banco de dados.";
    }  

    $sql->close();   
    header("Location:index.php?resp=$resposta");
?>