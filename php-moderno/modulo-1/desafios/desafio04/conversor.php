<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido v2.0</title>
    <link rel="stylesheet" href="../../exercicios/ex04/style.css">
</head>

<body>
    <main>
        <?php
        $dataIni = date('m-d-Y', strtotime('-7 days'));
        $dataFim = date('m-d-Y');
        // URL da API do Banco Central
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataIni.'\'&@dataFinalCotacao=\''.$dataFim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $dolar = $dados['value'][0]['cotacaoCompra'];
        $dolar = number_format($dolar, 2, '.', '');

        $valor = $_POST['valor'];
        echo "<h1><strong>Conversor de Moedas v1.0</strong></h1>";
        $valorConvertido = number_format($valor / $dolar, 2, ',', '.');
        echo "<p>Seus R$ $valor em dólar valem <strong>US$ $valorConvertido</strong> </p>";
        echo "<p>A cotação é <b>US$". $dolar ."</b> retirado diretamente do <strong>Banco Central</strong>.</p>"
        ?>
        <input type="button" value="Voltar" onclick="window.location.href='index.html'">
    </main>
</body>

</html>