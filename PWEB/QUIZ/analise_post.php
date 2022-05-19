<?php

    session_start();
    error_reporting(E_ERROR | E_PARSE);
    $totalCorrect = 0;
	$resposta = [];
    $cont = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $resposta['nome'] = $_POST["nome"];
        $resposta['ans1']  = $_POST["ans1"];
        $resposta['ans2']  = $_POST["ans2"];      
        $resposta['ans3']  = $_POST["ans3"];
        $resposta['ans4']  = $_POST["ans4"];
        $resposta['ans5']  = $_POST["ans5"];

        foreach ($resposta as $chave => $value){
            if($value == False){
                include 'resposta_2.html';
                break;

            } else {
                $cont ++;
                if ($cont == 6){
                    // Verificando Gabarito
                    if ($resposta['ans1'] == "D") { $totalCorrect++; }
                    if ($resposta['ans2'] == "C") { $totalCorrect++; }
                    $ans3 = implode($resposta['ans3']);
                    if ($ans3 == "14568") { $totalCorrect++; }
                    if ($resposta['ans4'] == "C") { $totalCorrect++; }
                    if ($resposta['ans5'] == "1917-03-08") { $totalCorrect++; }            
                    
                    $_SESSION['resultado'] = $totalCorrect;
                    include 'resposta_1.php';
                    break;    
                }
            }   
        }
     }   
?> 
