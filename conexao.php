<?php

    if(isset($_POST['submit'])){

        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['senha']);
        // print_r($_POST['login1']);

        include_once('index.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $login = $_POST['login1'];

        $result = mysqli_query($connect, "INSERT INTO usuarios(nome, email, senha, login) values ('$nome', '$email', '$senha', '$login')");
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Cadastro</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CADASTRO/LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <style>
        #resultado{
            width: 800px;
            margin: auto;
            padding: 0px;
            vertical-align: bottom;
            margin-top: 3%;
            height: 100%;
        }
        #resultado button{
            padding: 2px;
            float: right;
        }
        h4{
            display: inline-block;
            text-decoration: none;
            font-size: 12pt;
            padding: 8px;
            font-weight: normal;
        }
        @media screen and (max-width: 1336px){
            #resultado{
                width: 500px;
            }
        }
        #btnLogin:hover {
            background-color: white;
            color: #0f0c29;
        }
    </style>
</head>
<body>

    <div id="login" style="background-image: linear-gradient(-20deg, #00cdac 0%, #8ddad5 100%);
    ">
        <div class="container-fluid text-white text-center p-5">
            <h1>Cadastro</h1>
        </div>
        <div class="container">
            <div class="card my-3">
                <div class="card-body">
                    <form action="conexao.php" method="POST">
                        
                        <div class="container-fluid bg-primary text-white p-3 text-center" style="margin-bottom: 30px; background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);">
                            <h2>Entre com seus dados</h2>
                        </div>
                        <div id="erros"></div>
                        <div class="form-group">
                            <label for="usr">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome...">
                        </div>
                        <div class="form-group">
                            <label for="usr">Login:</label>
                            <input type="text" class="form-control" id="login1" name="login1" placeholder="Digite o seu nome de usuário...">
                        </div>
                        <div class="form-group">
                            <label for="usr">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail...">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a sua senha...">
                        </div>
                        <div class="form-group">
                            <label for="pwd2">Confirme a senha:</label>
                            <input type="password" class="form-control" id="senha2" placeholder="Confirme a sua senha...">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary container-fluid my-3" id="btnLogin" style="background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e); border: 1px solid #0f0c29;" onclick="pBotao()">Entrar</button>
                    </form>          
                 </div>
        </div>
        <br><br>
    </div>
</body>
</html>
