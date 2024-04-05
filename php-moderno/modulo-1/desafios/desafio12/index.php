<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 12</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <?
    $segDigitado = $_GET['num'] ?? 0;
    /* 
    $semanas = floor($segDigitado / 604800);
    $dias = floor(($segDigitado % 604800) / 86400);
    $horas = floor((($segDigitado % 604800) % 86400) / 3600);
    $minutos = floor(((($segDigitado % 604800) % 86400) % 3600) / 60);
    $segundos = floor((((($segDigitado % 604800) % 86400) % 3600) % 60));
    */
    $sobra = $segDigitado;
    $semanas = (int)($sobra / 604800);
    $sobra = $sobra % 604800;
    $dias = (int)($sobra / 86400);
    $sobra = $sobra % 86400;
    $horas = (int)($sobra / 3600);
    $sobra = $sobra % 3600;
    $minutos = (int)($sobra / 60);
    $segundos = $sobra % 60;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Qual é o total de segundos?</label>
            <input type="number" name="num" value="<?= $segDigitado ?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo </h2>
        <p> Analisando o valor que voce digitou, <strong><?= $segDigitado ?></strong> segundos, temos:</p>
        <ul>
            <li><strong><?= $semanas ?></strong> semanas</li>
            <li><strong><?= $dias ?></strong> dias</li>
            <li><strong><?= $horas ?></strong> horas</li>
            <li><strong><?= $minutos ?></strong> minutos</li>
            <li><strong><?= $segundos ?></strong> segundos</li>
        </ul>

    </section>
</body>

</html>