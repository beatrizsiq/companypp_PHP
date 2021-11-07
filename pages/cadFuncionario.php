
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/style/cadFuncionario.css" media="screen">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Company PP</title>
</head>

<body>

    <div class="container">
        <div class="titulo">
            <h1 id="titulo"><strong>Cadastro de Funcionários</strong> </h1>
        </div>
        <br>
        <div class="form">
            <form action="/pages/receberDados.php" method="POST" id="cFuncionarios" class="lado-a-lado">
                <div>
                <h3 id="titleUser"><strong>Dados do funcionário</strong></h3>
                    <br>
                </div>
                <fieldset id="user" class="grupo">
                    <div class="campo">
                        <input required type="text" name="nomeF" id="nome" size="20" maxlength="30" placeholder="Nome Completo">
                        <input type="text" name="cpf" id="cpf" size="20" maxlength="30" placeholder="CPF">
                        <input type="password" name="senha" id="senha" size="8" maxlength="8" placeholder="Senha">
                        <input type="number" name="cracha" id="cracha" size="8" maxlength="8" placeholder="Crachá">
                    </div>
                </fieldset>
                <br>
                <h3 id="endereço"><strong>Endereço</strong></h3>
                <br>
                <div class="campo" id="enderecoFun">
                    <input type="text" name="rua" id="rua" size="20" maxlength="25" placeholder="Rua, Av, Trav,...">
                    <input type="text" name="bairro" id="bairro" size="20" maxlength="25" placeholder="Bairro">
                    <input type="number" name="numCasa" id="cNum" size="5" min="0" max="99999" placeholder="Número">
                    <input type="text" name="cep" id="cep" size="5" class="form-control" placeholder="CEP: 00000-000" cep-mask:"00000-000" autocomplete="on">
                    
                </div>
                <br>
                <div class="grupo" id="enderecoFunc">
                    <select name="estado" id="cEstado">
                        <option value="MG">Minas Gerais</option>
                        <!-- <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="RS">Rio Grande do Sul</option> -->
                    </select>

                    <select id="cidade", name="cidade">
                        <option value="Teófilo Otoni">Teófilo Otoni</option>
                        <option value="Belo Horizonte">Belo Horizonte</option>
                        <option value="Governador Valadares">Governador Valadares</option>
                        <option value="Ipatinga">Ipatinga</option>
                    </select>
                </div>
                <br>
                <button class="botao" type="submit">Cadastrar </button>
                <button class="botao" type="button"><a href="/index.php"> Voltar</a></button>
            </form>
        </div>
    </div>

</body>

</html>