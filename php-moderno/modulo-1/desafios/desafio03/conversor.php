<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido v1.0</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <main>
        <?php
        $valor = $_POST['valor'];
        echo "<h1><strong>Conversor de Moedas v1.0</strong></h1>";
        const DOLAR = 5.22;
        $valorConvertido = number_format($valor / DOLAR, 2, ',', '.');
        echo "<p>Seus R$ $valor em dólar valem <strong>US$ $valorConvertido</strong> </p>";
        echo "<p><b>Cotação fixa de R$ 5,22</b> informada diretamente no codigo.</p>"
        ?>
        <input type="button" value="Voltar" onclick="window.location.href='index.html'">
    </main>
</body>

</html>