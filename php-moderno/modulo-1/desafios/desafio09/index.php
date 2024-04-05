<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 9</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <?
    $valor1= $_GET['num1'] ?? 01;
    $valor2= $_GET['num2'] ?? 01;
    $peso1= $_GET['pes1'] ?? 01;
    $peso2= $_GET['pes2'] ?? 01;
    $mediaSimples = ($valor1 + $valor2) / 2;
    //media ponderada
    $mediaPond = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

    ?>
    <main>
        <h1>Medias Aritimeticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1 valor:</label>
            <input type="number" name="num1" value="<?=$valor1?>">
            <label for="valor1">1 peso:</label>
            <input type="number" name="pes1" value="<?=$peso1?>">
            <label for="valor1">2 valor:</label>
            <input type="number" name="num2" value="<?=$valor2?>">
            <label for="valor1">2 peso:</label>
            <input type="number" name="pes2" value="<?=$peso2?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Calculo das medias</h2>
        <p>Analizando os valores <strong><?=$valor1?></strong> e <strong><?=$valor2?> temos:</p>
        <ul>
            <li>A media aritimetica simples entre os valores é igual a <strong><?=$mediaSimples?></strong></li>
            <li>A media aritimetica ponderada com peso <strong><?=$peso1?></strong> e <strong><?=$peso2?> é igual a <strong><?=number_format($mediaPond,3,",",".")?></strong></li>
        </ul>
        
    </section>
</body>

</html>