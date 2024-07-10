

<form action="conteudo.php" method="get">


    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required  minlength="3">
    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" required minlength="1">
    <input type="submit" value="Enviar">

</form>


<?php 
/*código de processamento apenas se o formulário for enviado (usando GET)
if ($_SERVER['REQUEST_METHOD'] === 'GET') */
if ($_REQUEST != null){
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    echo "<span>Olá $nome, você tem $idade anos</span>";
 };

?>
