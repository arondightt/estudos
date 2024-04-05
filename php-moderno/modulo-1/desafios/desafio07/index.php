<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 7</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <?
    $salario= $_GET['salario'] ?? 0;
    $salario = $salario;
    $salarioMin= 1412;
    //min = intdiv(salario, salarioMin) ou min = (int)($salario / $salarioMin
    $min= floor($salario / $salarioMin);
    //alternativa para o calculo do resto
     $resto = $salario % $salarioMin;
    //$resto = $salario - ($min * $salarioMin);
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Salario (R$):</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step='0.01'>
            <p>Considerando o salario minimo de <strong><?=number_format($salarioMin,2,",",".")?></strong> 
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem ganha <?=number_format($salario,2,",",".")?> recebe <strong><?=$min?> salarios minimos + <?=number_format($resto,2,",",".")?>.</strong> </p>
    </section>
</body>

</html>