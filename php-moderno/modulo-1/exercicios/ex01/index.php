<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php info</title>
</head>
<body>
    <h1>Dados do servidor</h1>
    <?php 
        phpinfo();
        // para ver mais detalhes use var_dump($_SERVER);
    ?>
</body>
</html>