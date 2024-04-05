<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 8</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <?
    $numero= $_GET['num'] ?? 0;
    $quad = sqrt($numero);
    $cub = pow($numero, 1/3);
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Numero:</label>
            <input type="number" name="num" id="salario" value="<?=$numero?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Analizando o <strong>numero <?=$numero?></strong>, temos:</p>
        <ul>
            <li>A raiz quadrada é <strong><?=number_format($quad,3,",",".")?></strong></li>
            <li>A raiz cubica é<strong> <?=number_format($cub,3,",",".")?> </strong></li>
        </ul>
        
    </section>
</body>

</html>