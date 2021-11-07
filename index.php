<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/style/index.css" media="screen">
    <link rel="shortcut icon" href="/img/favicon2.ico" type="image/x-icon">

    <title>Company PP</title>
</head>

<body>

    <?php
        session_start();
    ?>

    <div class="container">
        <div class="titulo">
            <h1 id="titulo">COMPANY PP</h1>
        </div>

        <div id="botao">
            <button class="botao"><a id="link" href="/pages/cadFuncionario.php" target="_parent">Cadastrar Funcionário</a></button>
            <button class="botao"><a href="/pages/listaFuncionarios.php" target="_parent">Listar Funcionários</a></button>
            <button class="botao"><a href="/pages/criadoraProg.php" target="_parent">Criadora</a></button>
        </div>
    </div>

    <?php
    if (isset($_SESSION['mensagem'])) {
        echo "<script>alert('" . $_SESSION['mensagem'] . "');</script>";
        unset($_SESSION['mensagem']);
    }
    ?>
</body>

</html>