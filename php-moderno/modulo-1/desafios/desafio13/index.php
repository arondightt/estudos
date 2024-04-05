<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 13</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?
    
    $valorSaque = $_GET['num'] ?? 0;/*
    $notas100 = floor($valorSaque / 100);
    $notas50 = floor(($valorSaque % 100) / 50);
    $notas20 = floor((($valorSaque % 100) % 50) / 20);
    $notas10 = floor(((($valorSaque % 100) % 50) % 20) / 10);
    $notas5 = floor((((($valorSaque % 100) % 50) % 20) % 10) / 5);
    */
    $sobra = $valorSaque;
    $notas100 = (int)($sobra / 100);
    $sobra = $sobra % 100;
    $notas50 = (int)($sobra / 50);
    $sobra = $sobra % 50;
    $notas20 = (int)($sobra / 20);
    $sobra = $sobra % 20;
    $notas10 = (int)($sobra / 10);
    $sobra = $sobra % 10;
    $notas5 = (int)($sobra / 5);
    
    ?>
    <main>
        <h1>Caixa eletronico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Quanto voce quer sacar?</label>
            <input type="number" name="num" value="<?= number_format($valorSaque, 2, ",", ".") ?>" step="5">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Saque de <?= number_format($valorSaque, 2, ",", ".") ?> </h2>
        <p> o caixa eletronico vai entregar as seguintes notas:</p>
        <ul>
            <li><img src="./imagens/100-reais.jpg" alt="100 reais"class='nota'> <strong> x <?= $notas100 ?></strong></li>
            <li><img src="./imagens/50-reais.jpg" alt="50 reais"class='nota'><strong> x <?= $notas50 ?></strong></li>
            <li><img src="./imagens/20-reais.jpg" alt="20 reais"class='nota'><strong> x <?= $notas20 ?></strong></li>
            <li><img src="./imagens/10-reais.jpg" alt="10 reais"class='nota'><strong> x <?= $notas10 ?></strong></li>
            <li><img src="./imagens/5-reais.jpg" alt="5 reais"class='nota'><strong> x <?= $notas5 ?></strong></li>
        </ul>
    </section>
</body>

</html>