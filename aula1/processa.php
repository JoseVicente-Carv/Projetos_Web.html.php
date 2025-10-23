<?php
$unidade1 = $_POST['unidade1'];
$unidade2 = $_POST['unidade2'];
$unidade3 = $_POST['unidade3'];

$media = round((($unidade1 + $unidade2 + $unidade3) / 3),1); 

$situacao = "";

if ($media >= 7) {
    $situacao = "Aprovado direto.";
} elseif ($media >= 3 and $media < 7) {
    $situacao = "Recuperação.";
} else {
    $situacao = "Reprovado.";
}

echo "A média do aluno foi " .round($media,1). "<br>O aluno foi <b>$situacao.</b>" 
?>