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
            <label> <h1>Escolha algo doce:</h1></label>

            <input type="radio" name="ans4" value="Tapioca rechada com chocolate e banana.">
            <img class="foto" src="imagens/tapioca-doce.jpg" alt="Tapioca rechada com chocolate e banana.">

            <input type="radio" name="ans4" value="Bolo.">
            <img class="foto" src="imagens/bolo.jpg" alt="Bolo">

            <input type="radio" name="ans4" value="Iogurte">
            <img class="foto" src="imagens/iogute.jpg" alt="Iogurte">

            <input type="submit" value="Próxima">
        </form>
    </div>
    <?php
      if(isset($_POST['ans4'])){
        $ans4 =  $_POST["ans4"];
        $_SESSION['ans4'] = $ans4;
        header("Location:resultado.php"); 
      }
    ?>
</body>
</html>