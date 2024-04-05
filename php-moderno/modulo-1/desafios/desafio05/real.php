<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <main>
        <h1>
            <strong>Resultado final</strong>
        </h1>
        
        <?php
        $num = $_GET['numero'] ?? 0;
        $parteInteira = floor((float)$num);
        $fracionaria = $num - $parteInteira;
        echo "<p>Analisando o numero <strong>".number_format($num,3,",",".")."</strong> informado pelo usuario:</p>";
        echo
        "<ul>
                <li>A parte inteira do numero é <strong>$parteInteira</strong></li>
                <li>Aparte fracionaria do numero é <strong>".number_format($fracionaria,3,".",",")."</strong></li>
            </ul>";
        ?>
        <input type="button" value="VOLTAR" onclick='javascript:history.go(-1)'>
    </main>
</body>

</html>