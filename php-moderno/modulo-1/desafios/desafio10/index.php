<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasafio 10</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <?
    $dataAtual= date('Y');
    $anoNasc= $_GET['num'] ?? 1996;
    $anoNaData= $_GET['num2'] ?? $dataAtual;
    $numero= $anoNaData - $anoNasc;
    
    
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Em que ano voce nasceu?</label>
            <input type="number" name="num" value="<?=$anoNasc?>" max="<?=$anoNaData?>">
            <label for="valor1">Quer saber que idade em que ano?</label>
            <input type="number" name="num2" value="<?=$anoNaData?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado </h2>
        <p> Quem nasceu em <strong><?=$anoNasc?></strong> em <strong><?=$anoNaData?></strong>, tera <strong><?=$numero?> anos.</strong> </p>
        
    </section>
</body>

</html>