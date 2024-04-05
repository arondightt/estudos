<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manipulação de strings</title>
</head>
<body>
    <h1>Manipulando Strings</h1>
    <?php 
        //se o texto tiver em aspas simples, o php somente exibe sem interpretar
        $texto = 'Curso de PHP \u{1F418}';
        echo $texto;
        echo '<br>';
        //se o texto tiver em aspas duplas, o php interpreta o texto
        $texto = "Curso de PHP \u{1F418}";
        echo $texto;
    ?>
    <p>paragrafo interpretado <? echo $texto?> com duas aspas" ".</p>
    <?php 
        //para interpolação usar o . para concatenar const e funções
        const FRASE = 'no ano de ';
        $momento = 'estamos';
        echo "nos $momento ". FRASE . date('Y');
        $nom = 'rodrigo';
        $snom = 'nogueira';
        echo '<br>';
        echo $nom .'"Minotauro"'. $snom;
        //alternativo
        echo '<br>';
        echo "$nom \"Minotauro\" $snom";
        // o mesmo metodo serve para aspas simples

        //metodos diferenciais para aspas duplas
        // /n quebra de linha
        // /t tabulação (espaço maior como tab) em saida de texto n html que é (&nbsp)
        // \\ barra invertida (escapar a barra) como no exemplo anterior
        // /r retorno de carro
        // \$ exibe sinal de cifrão
        // /u{1F418} codepoint unicode exibe o emoji


    ?>
</body>
</html>