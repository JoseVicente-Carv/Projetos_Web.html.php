<?php
// Inicie as variáveis necessárias com as notas digitadas pelo usuário.
$nota1 = $_POST['unidade1'];
$nota2 = $_POST['unidade2'];
$nota3 = $_POST['unidade3'];


$situacao = "";
// Inicie a constante.
const quantidade = 3;


// Calcule a média + Arredonde o resultado para 2 casa decimal.
$media = round((($nota1 + $nota2 + $nota3) / quantidade),2);


if ($media >= 6) {
    $situacao = "Aluno aprovado.";
} elseif ($media >= 4 and $media < 6) {
    $situacao = "Aluno em recuperação.";
} elseif ($media < 4) {
    $situacao = "Aluno reprovado.";
}


// Exibir resultados.
echo "A média do aluno foi <b>$media</b>.
<br>Situação: <b>$situacao</b>";
?>