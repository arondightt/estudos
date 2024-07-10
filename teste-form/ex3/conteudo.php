<h1> Localize seu endereço pelo CEP</h1>

<form action="conteudo.php" method="get">
    <label for="cep">CEP:</label>
    <input type="text" name="cep" id="cep" required minlength="8" maxlength="8">
    <input type="submit" value="Enviar">
</form>

<?php 
include "viacep.php";
if ($_REQUEST != null){
    $cep = $_GET["cep"];
    $endereco = getEndereco($cep);
    echo "<span>Endereço: $endereco</span>";
};

?>
