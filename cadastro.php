<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro || DIVÃ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" 
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous">
    </script>
</head>
<body>
    <?php
    require_once "conexao.php";

   session_start();
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['senha'] = $_POST["senha"];

    $senha = sha1($_SESSION['senha']);

    $checagem = "SELECT email FROM fast_paci where email ='$email'";
    $listacheck = mysqli_query($conexao, $checagem);
    //$dados = mysqli_fetch_array($listacheck);
    $achou = mysqli_num_rows($listacheck);

    
    if(strlen($_SESSION['nome']) > 80 ){
        echo "
        <script>
            alert('Preencha com seu nome abreviado');
            location.href='cadastro.php';
        </script>
        ";

    }else if($_SESSION['nome'] == ""){
        echo "
        <script>
            alert('Por favor, preencha com seu nome');
            location.href='index.php';
        </script>
        ";
    } else if(strlen($senha)>40){
        echo "
        <script>
            alert('Ops! senha muito grande');
            location.href='index.php';
        </script>
        ";
    } else if($achou == 1){
        
        echo "
        <script>
            alert('Ops! já existente');
            location.href='index.php';
        </script>
        ";
    }

    // print_r($conexao);

    $query = "INSERT INTO fast_paci(nome, email, senha) VALUES('$nome', '$email', '$senha')";

    $inserir = mysqli_query($conexao, $query);

    if($inserir == 1){
        echo "<script>
            alert('Cadastrado com sucesso!!!');
            location.href='home.php';
        </script>";
    } else {
        echo "Deu ruim !";
    }

    ?>    
</body>
</html>
