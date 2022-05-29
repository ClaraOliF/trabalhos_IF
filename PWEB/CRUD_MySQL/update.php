<?php 
    // Update de valores
    $sql = "SELECT chave,valor FROM tabela WHERE chave='{$chave}'";
    $row =  mysqli_fetch_assoc(mysqli_query($conn, $sql));
    if(!empty($row)){
        if($row['valor']===$valor){
            $resposta = "O valor ".$valor." já está cadastrado nesta chave.";
        } else {
            $sql = "UPDATE tabela SET valor='{$valor}' WHERE chave='{$chave}'";
            $row =  mysqli_query($conn, $sql);
            $resposta = "Novo valor foi atualizado.";
        }               
    } else {
        $resposta = "A chave ".$chave." não está cadastrada em nosso banco de dados.";
    }  

    mysqli_close($conn);    
    header("Location:index.php?resp=$resposta");
?>