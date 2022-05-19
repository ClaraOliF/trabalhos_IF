<!DOCTYPE html>
<html lang="pt"> 
    <head>
        <meta charset="UTF-8">
        <title>PHP Quiz</title>
        <link rel="stylesheet" type="text/css" href="quiz.css">
    </head>
<body>
 
 <p> <h1 id="titulo">RESULTADO</h1></p>
 
 <?php
    session_start();
    if ($_SESSION['resultado']>=4){
        echo "<p id='principal'> Parabéns! Você conseguiu acertar <strong>TODAS</strong> as <strong>5 </strong> questões!</p>";
        echo "<img src='imagens/positivo.jpg' id='principal'>";
    
    } elseif ($_SESSION['resultado']==3){
        echo "<p id='principal'> Então... você conseguiu acertar <strong>" .  $_SESSION['resultado'] . "</strong> questões! </p>";
        echo "<img src='imagens/mediano.jpg' id='principal'>";
    
    } elseif ($_SESSION['resultado']==2){
        echo "<p id='principal'>Você só conseguiu acertar <strong>" .  $_SESSION['resultado'] . "</strong> questões. Tente melhorar!</p>";
        echo "<img src='imagens/mediano.jpg' id='principal'>";
    
    } elseif ($_SESSION['resultado']==1){
        echo "<p id='principal'>Você só conseguiu acertar <strong>" .  $_SESSION['resultado'] . "</strong> questão. Tente melhorar!</p>";
        echo "<img src='imagens/negativo.jpg'  id='principal'>";
    
    } else {
        echo "<p id='principal'>Poxa, você <strong> ZEROU!</strong> Não foi desssa vez...</p>";
        echo "<img src='imagens/zerou.jpg' id='principal'>";
    }
?> 

</body>
</html>