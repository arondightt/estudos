<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções aritimeticas</title>
    <link rel="stylesheet" href="../ex04/style.css">
</head>
<body>
    <main>
        <h1>funções aritimeticas em php</h1>
        <p>o valor absoluto de -10 é <?php echo abs(-10); ?></p>
        <p>o valor de 8<sup>2</sup> é <?php echo pow(8,2); ?></p>
        <p>a raiz quadrada de 64 é <?php echo sqrt(64); ?></p>
        <p> a raiz quadrada de 64 é <?php echo 64 ** (1/2); ?></p>
        <p>a raiz cubica de 64 é <?php echo 64 **(1/3);?></p>
        <p>o valor de 5.1 arredondado para cima é <?php echo ceil(5.1); ?></p>
        <p>o valor de 5.9 arredondado para baixo é <?php echo floor(5.9); ?></p>
        <p>o valor de 5.4 arredondado de forma aritmetica é <?php echo round(5.4); ?></p>
        <p>o valor de 5.5 arredondado de forma aritmetica é <?php echo round(5.5); ?></p>
        <p>o valor de 5.6 arredondado de forma aritmetica é <?php echo round(5.6); ?></p>
        <p> o valor de 274 decimal em base binaria é <?php echo decbin(274); ?></p>
        <p> o valor de 274 decimal em base octal é <?php echo decoct(274); ?></p>
        <p> o valor de 274 decimal em base hexadecimal é <?php echo dechex(274); ?></p>
        <p> o valor de 101010 binario em base decimal é <?php echo bindec(101010); ?></p>
        <p>outra opção para converter 274 em binario é o base_convert(num, fromBase, toBase) fica <?php echo base_convert(274,10,2)?></p>
        <p>para receber o resto inteiro de uma divisao de 5/2 use intdiv(x,y) <?php echo 'Resultando '. intdiv(5,2)?></p>
        <p>para receber o resto de uma divisao de 5/2 use fmod(x,y) ou % <?php echo 'Resultando '. fmod(5,2)?></p>
        <p>para achar o min de uma sequencia como em 5 e 2 min(x,y) <?php echo 'menor numero '. min(5,2)?></p>
        <p>para achar o max de uma sequencia como em 5 e 2 max(x,y) <?php echo 'maior numero '. max(5,2)?></p>
         <!-- funções de formatação -->
        <p>para formatar um numero como 5.1234 em 5.12 use number_format(x,y) <?php echo 'numero formatado '. number_format(5.1234,2)?></p>
        <p>tem outras funções matematicas como:</p>
        <p>sin(x) cos(x) tan(x) asin(x) acos(x) atan(x) sinh(x) cosh(x) tanh(x) asinh(x) acosh(x) atanh(x) log(x) log10(x) exp(x) pi() deg2rad(x) rad2deg(x)</p>
        <p>para mais informações acesse <a href="https://www.php.net/manual/pt_BR/ref.math.php">php.net</a></p>

    </main>
    
</body>
</html>