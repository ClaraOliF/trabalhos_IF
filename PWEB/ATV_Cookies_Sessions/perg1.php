<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Let's Quiz</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <label> <h1>O que prefere beber?</h1></label>

            <input type="radio" name="ans1" value="Café Preto">
            <img class="foto" src="imagens/cafe-preto.jpg" alt="Café Preto">

            <input type="radio" name="ans1" value="Café com Leite">
            <img class="foto" src="imagens/cafe.webp" alt="Café com Leite"> 

            <input type="radio" name="ans1" value="Suco">
            <img class="foto" src="imagens/suco-laranja.jpg" alt="Suco">

            <input type="radio" name="ans1" value="Achocolatado">
            <img class="foto" src="imagens/achocolatado.jpg" alt="Achocolatado">

            <input type="submit" value="Próxima" >
        </form>
    </div>
    <?php
      if(isset($_POST['ans1'])){
        $ans1 =  $_POST["ans1"];
        setcookie('ans1', $ans1 ); 
        header("Location:perg2.php"); 
      }

    ?>
</body>
</html>