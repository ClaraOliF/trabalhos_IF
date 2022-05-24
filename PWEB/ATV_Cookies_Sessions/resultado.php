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
  <h1>Seu cardápio escolhido:</h1>
    <?php 
      echo $_COOKIE['ans1']."<br>";
      echo $_COOKIE['ans2']."<br>";
      echo $_SESSION['ans3']."<br>";
      echo $_SESSION['ans4']."<br>";
    ?>

  <p><strong> Beda água, matenha-se hidratado(a)!</strong></p>
  </div>
</body>
</html>