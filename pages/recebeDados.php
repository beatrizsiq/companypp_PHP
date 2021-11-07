<?php

$nome =  $_POST['nomeF'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numCasa = $_POST['numCasa'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$cracha = $_POST['cracha'];

file_put_contents("../data/funcionarios.txt", "Nome = " . $nome . "; CPF = " . $cpf, FILE_APPEND);
file_put_contents("../data/funcionarios.txt", "; Crachá = ". $cracha . "; CEP = " . $cep, FILE_APPEND);
file_put_contents("../data/funcionarios.txt", "; Estado = " . $estado . "; Cidade = " . $cidade . "\n--Fim--", FILE_APPEND);

header("Location: ../index.php" );

?>
