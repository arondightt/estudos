<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_REQUEST); // Junção de $_GET , $_POST e $_COOKIE porem ocupa mais memoria
            $name = $_REQUEST['name'] ?? 'Fulano'; // operador null coalescente (??) atribui um valor padrão caso a variável não exista
            $sobrenome = $_GET['sobrenome'] ?? 'sem sobrenome';
            echo "<p>Ola <strong>$name $sobrenome</strong>. seja bem vindo!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>
</html>