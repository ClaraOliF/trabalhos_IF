<?php 

// Buscar linhas no BD das categorias
function take_tags(){
    require "conexao.php";  
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

function update($img, $produto, $descricao, $preco, $fatias, $tempo, $categoria, $inclusao){

    // Nesse caso, a diferença é que existirá o id como um parâmetro também
    echo $produto."<br>";
    echo $descricao."<br>";
    echo $preco."<br>";
    echo $fatias."<br>";
    echo $tempo."<br>";
    echo $inclusao."<br>";
    echo $categoria."<br>";
    echo strval($img);
}

function deletar(){

}

function select_by_id($id){
    require "conexao.php";
    $valores=array();
    $sql = "SELECT * FROM bolos WHERE ID=".$id;
    $resultado =  mysqli_query($conn, $sql);
    if(!empty($resultado)){
        while($row = mysqli_fetch_assoc($resultado)) {
            foreach($row as $chave => $value){
                array_push($valores,$value);
                }
            }
        }
    return $valores;
}



?>