<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Aleatorios</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        <p>Gerando numeros aleatorios entre 0 e 100...</p>
        <p>o valor gerado foi <strong><?php echo mt_rand(0,100)?><strong></strong></p>
        <input type='button' value="<? echo "\u{27F2} Gerar outro"?>" onclick='window.location.reload()'>
        <!-- outras opções seriam rand() ou random_int()[esse cria uma sequecia criptograficamente seguro, o que é mais lento]-->
    </main>
</body>
</html>