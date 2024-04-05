<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form autoalimentada</title>
    <link rel="stylesheet" href="../ex04/style.css">
</head>

<body>
    <?
    $v1= $_GET['valor1'] ?? 0;
    $v2= $_GET['valor2'] ?? 0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1:</label>
            <input type="number" name="valor1" id="valor1" value="<?=$v1?>">
            <label for="valor2">valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?=$v2?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>o valor de <?=$v1?> + <?=$v2?> é <?= $v1 + $v2?></p>
    </section>
</body>

</html>