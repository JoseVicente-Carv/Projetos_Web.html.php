<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "banco_games";

$conexao = new mysqli($servidor,$usuario,$senha,$banco);

// Testar conexão.
if ($conexao) {
    echo "sucesso na Conexão com o banco de dados.";
} else {
    echo "Falha na conexão com o banco de dados.";
}
?>