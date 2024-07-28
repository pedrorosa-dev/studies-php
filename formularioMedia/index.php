<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular Media</title>
</head>

<body>
  <header class="header-h1">
    <h1>Calcular Media do aluno CESMAC</h1>
  </header>
  <section class="container-form">
    <form action="" method="post" class="content-form">
      <div class="container-input">
        <label for="nota1" class="titulo-form"></label>
        <input type="number" name="nota1" id="nota1" placeholder="Digite a nota 1" class="input-form" step="any">
        <label for="nota2" class="titulo-form"></label>
        <input type="number" name="nota2" id="nota2" placeholder="Digite a nota 2" class="input-form" step="any">
        <label for="nota3" class="titulo-form"></label>
        <input type="number" name="nota3" id="nota3" placeholder="Digite a nota 3" class="input-form" step="any">
        <div class="btn">
          <input type="submit" value="calcular">
        </div>
      </div>
    </form>
  </section>
  <section class="container-result">
    <?php
    if ($_POST) {
      function calcularMedia($n1, $n2, $n3)
      {
        return ($n1 + $n2 + $n3) / 3;
      }

      $notas = [];

      $notas[] = isset($_POST['nota1']) ? floatval($_POST['nota1']) : 0;
      $notas[] = isset($_POST['nota2']) ? floatval($_POST['nota2']) : 0;
      $notas[] = isset($_POST['nota3']) ? floatval($_POST['nota3']) : 0;

      $media = calcularMedia($notas[0], $notas[1], $notas[2]);

      echo "Sua média é: " . number_format($media, 2) . "<br>";

      if ($media == 10) {
        echo "Nota máxima!<br>";
      } elseif ($media >= 6) {
        echo "Aprovado<br>";
      } else {
        echo "Reprovado<br>";
      }
    } else {
      echo "<p>Informe as notas para calcular a média</p>";
    }
    ?>

  </section>
</body>

</html>