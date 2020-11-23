<?php
  session_start();
  // print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || DIVÃ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" 
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous">
    </script>
</head>
<body>
  <h3>
  <?php
  $user =explode(" ",$_SESSION['nome']);

    echo "Olá, ".$user[0]." Seja bem vindo ao Divã";
  ?>
  </h3>
</body>
</html>

<!-- ziones20@pes.com     ziones20 -->