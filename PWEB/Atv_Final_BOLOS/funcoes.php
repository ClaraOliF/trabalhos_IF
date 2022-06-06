<?php 

// Buscar linhas no BD das categorias
function take_tags(){
    require_once "conexao.php";  
    $sql = "SELECT * FROM categoria";
    $result =  mysqli_query($conn, $sql); 

    if(!empty($result)){
        return $result;
    } else {
        return "Sem categorias localizadas";
    }
}

function cadastro($img, $produto, $descricao, $preco, $fatias, $tempo, $categoria, $inclusao){
    require "conexao.php";
    $sql = "SELECT * FROM bolos";
    $row = mysqli_query($conn, $sql);
    $sql = $conn->prepare("INSERT INTO bolos(`imagem`,`produto`,`descricao`,
                    `valor`,`fatias`,`tempo_dias`,`categoria`,`inclusao`) 
                    VALUES (?,?,?,?,?,?,?,?)");
    $sql->bind_param("sssdiiss", $img, $produto, $descricao, $preco, $fatias,
                            $tempo, $categoria, $inclusao);
    $sql->execute();

    $sql->close();      
}

function update(){
    echo "teste editar";

}

function deletar(){
    echo "teste delete";

}

?>