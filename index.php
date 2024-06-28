<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Soma de Números</title>
</head>
<body>
  <h2>Calculadora de Soma</h2>
  <form method="post">
    <label for="num1">Digite o primeiro número:</label>
    <input type="text" id="num1" name="num1"><br><br>
    <label for="num2">Digite o segundo número:</label>
    <input type="text" id="num2" name="num2"><br><br>
    <input type="submit" value="Calcular">
  </form>

  <?php
  // Verifica se os números foram enviados via POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores dos números do formulário
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Verifica se ambos os campos foram preenchidos
    if (!empty($num1) && !empty($num2)) {
      // Converte os valores para números inteiros
      $num1 = intval($num1);
      $num2 = intval($num2);

      // Calcula a soma
      $soma = $num1 + $num2;

      // Exibe o resultado
      echo "<p>A soma entre $num1 e $num2 é igual a $soma</p>";
    } else {
      echo "<p>Preencha ambos os campos para calcular a soma.</p>";
    }
  }
  ?>
</body>
</html>
