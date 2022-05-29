<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atv_crud_mysql"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na Conexão: " . mysqli_connect_error());}  
?>