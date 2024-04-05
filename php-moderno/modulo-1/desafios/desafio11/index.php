<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 11</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <?
    $preco = $_GET['num'] ?? 0;
    $porcentagem = $_GET['num2'] ?? 0;
    $precoFinal = $preco + ($preco * $porcentagem / 100);


    ?>
    <main>
        <h1>Reajustador de preço</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Preço do produto (R$)</label>
            <input type="number" name="num" value="<?= $preco ?>">
            <label for="valor1">Qual o precentual de ajuste? <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="num2" id="reaj" value="<?= $porcentagem ?>" min='0' max='100' step="1" oninput="mudarValor()"
            >
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <p> o produto custava <strong><?= number_format($preco, 2, ",", ".") ?></strong> e com o reajuste de <strong><?= $porcentagem ?>%</strong> passou a custar <strong><?= number_format($precoFinal, 2, ",", ".") ?></strong></p>
    </section>
    <script>
        mudarValor();
         function mudarValor() {
            p.innerText = reaj.value;
         }
    </script>
</body>

</html>