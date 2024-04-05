<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <link rel="stylesheet" href="../ex04/style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
            setcookie('dia-da-semana','quarta',time()+3600);
            session_start();
            $_SESSION['testando'] = 'FUNCIONANDO';
            echo '<h1>superglobal get</h1>';
            echo "<p>".var_dump($_GET)."</p>";
            echo '<h1>superglobal post</h1>';
            echo "<p>".var_dump($_POST)."</p>";
            echo '<h1>superglobal files</h1>';
            echo "<p>".var_dump($_REQUEST)."</p>";
            echo '<h1>superglobal cookie</h1>';
            echo "<p>".var_dump($_COOKIE)."</p>";
            echo '<h1>superglobal session</h1>';
            echo "<p>".var_dump($_SESSION)."</p>";
            echo '<h1>superglobal ENV</h1>';
            echo "<p>".var_dump($_ENV)."</p>";
            /*foreach (getenv() as $c => $v){
                echo "<br> $c ->$v";
            };*/
            echo '<h1>superglobal SERVER</h1>';
            echo "<p>".var_dump($_SERVER)."</p>";
            echo '<h1>superglobal GLOBALS</h1>';
            echo "<p>".var_dump($GLOBALS)."</p>";

               /* echo '$_SERVER';
                print_r($_SERVER);
                print_r($_GET);
                echo '$_POST';
                print_r($_POST);
                echo '$_FILES';
                print_r($_FILES);
                echo '$_COOKIE';
                print_r($_COOKIE);
                echo '$_SESSION';
                print_r($_SESSION);
                echo '$_REQUEST';
                print_r($_REQUEST);
                echo '$_ENV';
                print_r($_ENV);
                echo '$_SERVER';
                print_r($_SERVER);*/
                echo "<p>para mais informações acesse:<a href='https://www.php.net/manual/pt_BR/language.variables.superglobals.php' target=\"_blank\">A documentação</a></p>"
            ?>
        </pre>
    </main>
</body>
</html>