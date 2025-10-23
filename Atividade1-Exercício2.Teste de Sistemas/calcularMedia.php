<?php
// Inicie as variáveis necessárias com as notas digitadas pelo usuário.
$temepratura1 = $_POST['dia1'];
$temepratura2 = $_POST['dia2'];
$temepratura3 = $_POST['dia3'];
$temepratura4 = $_POST['dia4'];
$temepratura5 = $_POST['dia5'];
$temepratura6 = $_POST['dia6'];
$temepratura7 = $_POST['dia7'];


$resultado = "";
// Inicie a constante.
const quantidade = 7;


// Calcule a média + Arredonde o resultado para 1 casa decimal.
$media = round(((
    $temepratura1 + $temepratura2 + $temepratura3 + $temepratura4 + $temepratura5 + $temepratura6 + $temepratura7
    ) / quantidade),1);


if ($media < 15) {
    $resultado = "fria. ❄️";
} elseif ($media >= 15 and $media <= 25) {
    $resultado = "agradável. 🙂";
} elseif ($media > 25) {
    $resultado = "quente. 🔥";
}


// Exibir resultados.
echo "A temperatura média da semana é <b>$media</b>.
<br>Está é uma semana <b>$resultado</b>";
?>