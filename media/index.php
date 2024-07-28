<?php
function calcularMedia($n1, $n2, $n3)
{
  return ($n1 + $n2 + $n3) / 3;
}

$notas = [];

for ($i = 1; $i <= 3; $i++) {
  echo "Digite a nota $i: ";
  $nota = (float) trim(fgets(STDIN));
  $notas[] = $nota;
}

$media = calcularMedia($notas[0], $notas[1], $notas[2]);

echo "Sua média é: " . number_format($media, 2) . "\n";

if ($media == 10) {
  echo "Nota máxima!\n";
} elseif ($media >= 6) {
  echo "Aprovado\n";
} else {
  echo "Reprovado\n";
}