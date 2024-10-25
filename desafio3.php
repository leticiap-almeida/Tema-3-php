<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média</title>
</head>
<body>
    <h2>Cálculo da Média de Três Valores</h2>
    <form method="post" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" id="valor1" step="0.01" required><br>
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" id="valor2" step="0.01" required><br>
        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" id="valor3" step="0.01" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        $media = ($valor1 + $valor2 + $valor3) / 3;
        
        $resultado = $media >= 7 ? "acima do esperado" : "abaixo do esperado";

        echo "<h3>Média: " . number_format($media, 2) . "</h3>";
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>

