<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?
    $nome = $_get['nome'];
    $email = $_POST['email'];

    
    ?>
</body>

    <main>
        <h1>Formulário</h1>
        <form action="index.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit">Enviar</button>
        </form>
        <h1>Resposta</h1>
        <p>seu nome <? echo $nome ?> e seu email é <? echo $email ?> </p>
    </main>

</html>