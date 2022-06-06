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

function update()// inserir parametro que vai ser passado desde a página exibicao{
    // Verificar se foi possível chegar nesta função
    // Realizar o SELECT a partir do valor de ID informado pelo parâmetro
    // Ver se o ID existe
    // Ir para a página EDITAR.PHP
    //  - Nela, cê vai inserir novo formulário com valores já definidos identificados no BD e então enviar
    //  - Verificar se os valores não são nulos(e se foram realmente alterados -  tlvz não seja necessario)
    //  - Enviar diretamente para cá os valores novos
    // E finalmente realizar UPDATE aqui
    echo "teste editar";

}

function deletar(){
    echo "teste delete";
    // Verificar de foi possível chegar na função
    // SELECT
    // Verificar se existe o ID
    // DROP SQL DELETE
    // header("Location:Index.php");

}

?>
