<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" 
    integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
     crossorigin="anonymous"></script>
</head>
<body>

   <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="login.php" method="POST" class="signin-form">
                    <h2 class="title">Entrar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário / E-mail">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="Password" placeholder="Senha">
                    </div>
                    <input type="submit" value="Entrar" class="btn solid">
                </form>

                <form action="cadastro.php" method="POST" class="signup-form">
                    <h2 class="title">Cadastrar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="E-mail">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="Password" placeholder="Senha">
                    </div>
                    <input type="submit" value="Cadastrar" class="btn solid">
                </form>
                

            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo por aqui ?</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, obcaecati, neque nesciunt autem 
                        minus necessitatibus repudiandae cum a saepe consequatur assumenda soluta animi veniam, porro unde. 
                        Veniam perferendis repudiandae quas. mayk brito</p>
                        <button class=" btn transparent" id="sign-up-btn">Cadastre-se</button>
                </div>
                <img src="img/doutora.svg" alt="foguete" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Entre na sua conta</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, obcaecati, neque nesciunt autem 
                        minus necessitatibus repudiandae cum a saepe consequatur assumenda soluta animi veniam, porro unde. 
                        Veniam perferendis repudiandae quas.</p>
                        <button class="btn transparent" id="sign-in-btn">Conecte-se</button>
                </div>
                <img src="img/msg.svg" alt="doutora" class="image">
            </div>
        </div>
       
   </div>
   <script src="js/app.js"></script>
</body>
</html>