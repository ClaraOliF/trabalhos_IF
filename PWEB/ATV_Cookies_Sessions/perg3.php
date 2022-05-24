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
            <label> <h1>Que pão você prefere pela manhã?</h1></label>

            <input type="radio" name="ans3" value="Pão com manteiga.">
            <img class="foto" src="imagens/pao-manteiga.jpg" alt="Pão com manteiga.">

            <input type="radio" name="ans3" value="Pão na torrado.">
            <img class="foto" src="imagens/pao-torrado.jpg" alt="Pão na torrado.">

            <input type="radio" name="ans3" value="Pão com queijo e presunto.">
            <img class="foto" src="imagens/queijo-persunto.jpg" alt="Pão com queijo e presunto.">

            <input type="submit" value="Próxima">
        </form>
    </div>
    <?php
      if(isset($_POST['ans3'])){
        $ans3 =  $_POST["ans3"];
        setcookie('ans3', $ans3 ); 
        header("Location:perg4.php"); 
      }

    ?>
</body>
</html>