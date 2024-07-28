<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular IMC</title>
</head>

<body>
  <section>
    <h1>Calcular IMC</h1>
    <form action="" method="post">
      <label for="peso">Peso (kg):</label>
      <input type="number" name="peso" id="peso" required step="any">
      <br>
      <label for="altura">Altura (m):</label>
      <input type="number" name="altura" id="altura" step="0.01" required>
      <br>
      <button type="submit">Calcular</button>
    </form>
  </section>

  <?php
  if ($_POST) {
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);
    function calcularIMC($p, $a)
    {
      return $p / ($a ** 2);
    }
    $imc = calcularIMC($peso, $altura);
    echo "<p>Seu IMC é:</p>" . number_format($imc, 2);
    if ($imc < 18.5) {
      echo "<p>Abaixo do peso</p>";
    } elseif ($imc < 24.9) {
      echo "<p>Peso normal</p>";
    } elseif ($imc < 29.9) {
      echo "<p>Sobrepeso</p>";
    } elseif ($imc < 34.9) {
      echo "<p>Obesidade grau 1</p>";
    } elseif ($imc < 39.9) {
      echo "<p>Obesidade grau 2</p>";
    } else {
      echo "<p>Obesidade grau 3</p>";
    }
  } else {
    echo "<p>Preencha os campos acima para calcular o IMC</p>";
  }
  ?>
</body>

</html>