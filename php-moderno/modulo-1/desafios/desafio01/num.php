<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>
<body>
    <header><h1><strong>Resultado final</strong></h1></header>
    <main>
        <?php 
            $num = $_GET['numero'] ?? 0;
            echo "<p>o numero escolhido foi <strong>$num</strong> </p>";
            echo "<p> o seu <b><I>antecessor</I></b> é ".($num-1)."</p>";
            echo "<p> o seu <b><I>sucessor</I></b> é ".($num+1)."</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; VOLTAR</button>
    </main>
</body>
</html>