<?php
    // Realizando consulta no DB
    $sql = "SELECT chave,valor FROM tabela WHERE chave='{$chave}'";
    $row =  mysqli_fetch_assoc(mysqli_query($conn, $sql));
    if(!empty($row)){
        $resposta = " O valor da chave ". $chave ." é : ". $row['valor'];
    } else {
        $resposta = "A chave ".$chave." não está cadastrada em nosso banco de dados.";
    }  
    mysqli_close($conn);
    header("Location:index.php?resp=$resposta");
?>
