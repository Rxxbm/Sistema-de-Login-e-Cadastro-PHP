<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA Login</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    #secao{
        display: flex;
        flex-direction: column;
        background-color: blueviolet;
        align-items: center;
        justify-content: center;
        align-content: center;
        align-self: center;
        width: 40%;
        margin: auto;
        padding: 40px;
        translate: 0px calc(50%);
        gap: 5px;
    }
    button{
        width: 25%;
    }
    input{
        width: 100%;
    }
</style>
<body>
            <form action="login.php" method="POST">
                <section id="secao">
                    <div class="email">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="senha">
                        <label for="">Email: </label>
                        <input type="text" placeholder="Digite o seu email.." name="email">
                    </div>
                    <div>
                        <label for="">Senha: </label>
                        <input type="password" placeholder="Digite a sua senha.." name="senha">
                    </div>
                    <button type="submit" name="submit" value="enviar">ENVIAR</button>
                </section>
            </form>
</body>
</html>