<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 06</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <?
    $dividendo = $_GET['num'] ?? 0;
    $divisor = $_GET['num2'] ?? 1;
    $resto = $dividendo % $divisor;
    $resultado = floor($dividendo / $divisor);


    ?>
    <main>
        <h1>Anatomia de uma divisao</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Dividendo:</label>
            <input type="number" name="num" value="<?= $dividendo ?>">
            <label for="valor1">Divisor: </label>
            <input type="number" name="num2" value="<?= $divisor ?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisao </h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>

    </section>
</body>

</html>