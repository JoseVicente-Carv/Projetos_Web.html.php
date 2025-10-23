<?php
include "conexao.php"; // Inclui neste arquivo o arquivo q está conectado ao banco de dados.

// Iniciar variaveis com os valores digitados peloo usuario.
$nome = $_POST['nomeDigitado'];
$funcao = $_POST['funcaoDigitado'];
$salario = $_POST['salarioDigitado'];

$sql = "INSERT INTO funcionarios(nome,funcao,salario) VALUES ('$nome', '$funcao', '$salario')";

if ($conexao -> query($sql)) {
    echo "Funcionario cadastrado com sucesso!";
} else {
    echo "Ocorreu um erro.";
}
?>