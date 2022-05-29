<?php
    // Deletando Chaves e seus valores
    $sql = "SELECT chave FROM tabela WHERE chave='{$chave}'";
    $row =  mysqli_query($conn, $sql);
    if(mysqli_num_rows($row)>0){
        $sql = "DELETE FROM tabela where chave='{$chave}'";
        $res = mysqli_query($conn, $sql);
        $resposta = "Chave deletada com sucesso.";
    } else {
        $resposta = "A chave ".$chave." não está cadastrada em nosso banco de dados.";
    }  
    mysqli_close($conn);
    header("Location:index.php?resp=$resposta");
?>