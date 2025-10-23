<?php
include "conexao.php";

$nome = $_POST['nomeDigitado'];
$produtor = $_POST['produtorDigitado'];
$plataforma = $_POST['plataformaDigitado'];
$preco = $_POST['precoDigitado'];

$sql = "INSERT INTO tabela_games (nome,produtor,plataforma,preco) 
VALUES ('$nome', '$produtor', '$plataforma', '$preco')";

if ($conexao -> query($sql)) {
    echo "Jogo cadastrado com sucesso!";
} else {
    echo "Ocorreu um erro no cadastro do jogo.";
}
?>