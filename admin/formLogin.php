<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div display="flex" style="text-align: center;">
            <img class="logo-login" width="500" src="img/padaria-logo.png">
        </div>
        <br>
        <h1>Autentique-se para continuar.</h1>
        <br>
        <?php
            if (isset($_GET["authmsg"]) && !empty($_GET["authmsg"])) {
                $authmsg = $_GET["authmsg"];
        ?>
                <div class="alert alert-danger" role="alert">
                    <?=$authmsg;?>
                </div>
        <?php
            } else {
        ?>
                <div class="alert alert-info" role="alert">
                    Informe seu usuário e senha nos campos abaixo.
                </div>
        <?php
        }
        ?>

        <form action="auth.php" method="POST">
            <div class="form-group">
                <label for="user">Usuário*:</label>
                <input type="text" class="form-control" placeholder="Digite seu usuário" id="user" name="login">
            </div>
            <div class="form-group">
                <label for="password">Senha*:</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" id="password" name="senha">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="keepConnected">
                <label class="form-check-label" for="keepConnected">Continuar conectado</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>