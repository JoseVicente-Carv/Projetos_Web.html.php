<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "funcionarios";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Testar a conexão.
/* if ($conexao) {
    echo "Deu td certo.";
} else {
    echo "Deu td errado.";
} */
?>