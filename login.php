<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login 2 || DIVÃ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" 
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous">
    </script>
</head>
<body> -->

    <?php
    session_start();
    
    require_once 'conexao.php';

    if(empty($_POST['emailL']) || empty($_POST['senhaL'])) {
        header('Location: index.php');
        exit();
    }


        $email = $_POST["emailL"];
        $senha = $_POST["senhaL"];
        $senha = sha1($senha);

        $query = "SELECT nome, email, senha FROM fast_paci WHERE email = '$email' AND senha = '$senha'";

        $check = mysqli_query($conexao, $query);
        $achou = mysqli_num_rows($check);

        if ($achou == 1){
            $dados = mysqli_fetch_array($check);

         
            $_SESSION["nome"] = $dados["nome"];
            $_SESSION["emailL"] = $dados["email"];
            $_SESSION["senhaL"] = $dados["senha"];
            
            header("Location:home.php");
            exit();

        }else{
            echo "Dados ínvalidos";
            header("Location: index.php");
            exit();
        }
    
    ?>
<!-- 
</body>
</html> -->