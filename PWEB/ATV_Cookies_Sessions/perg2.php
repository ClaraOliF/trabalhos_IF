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
            <label> <h1>Escolha uma fruta para acompanhar:</h1></label>

            <input type="radio" name="ans2" value="Melancia">
            <img class="foto" src="imagens/melancia.jpg" alt="Melancia">

            <input type="radio" name="ans2" value="Banana">
            <img class="foto" src="imagens/banana.jpg" alt="Banana">

            <input type="radio" name="ans2" value="Maçã">
            <img class="foto" src="imagens/maca.jpg" alt="Maçã">

            <input type="submit" value="Próxima">
        </form>
    </div>
    <?php
      if(isset($_POST['ans2'])){
        $ans2 =  $_POST["ans2"];
        setcookie('ans2', $ans2 ); 
        header("Location:perg3.php"); 
      }

    ?>
</body>
</html>