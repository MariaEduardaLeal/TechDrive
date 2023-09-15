<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <section class="area-login">
        <div class="login">
            <div style="height: 175px;">
                <img src="img/logo.png"></div>
            <form id="index.php" action="autenticar.php" method="post">
                <input type="text" name="login" placeholder="Login"><br>
                <input type="password" name="senha" placeholder="Senha"><br>
                <input type="submit" name="Acessar" value="Acessar">
            </form>
            <h4> Ainda não tem conta?<a href="esqueciSenha.php">Criar conta</a></h4>
        </div>
    </section>
</body>
</html>