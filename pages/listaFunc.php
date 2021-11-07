<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../style/tabela.css" media="screen">
    
    <title>Funcionários - Company PP</title>
</head>
<body>
    <div class="titulo">
        <h1 id="titulo">Lista de Funcionários</h1>
    </div>
    <br>
    <?php
        $funcionarios = file_get_contents("../data/funcionarios.txt");

        $funcionarios = explode("--Fim--", $funcionarios);
    ?>

    <table>
        <tr>
            <th><strong>Funcionários Cadastrados</strong></th>
        </tr>
        
        <?php
            
            foreach($funcionarios as $funcionario){
                ?>
                <tr>
                    <td><?= $funcionario ?></td>
                </tr>
                <?php
            }
        ?>

    </table>
    <button class="botao" type="submit"><a href="/index.php"> Voltar</a></button>
</body>
</html>