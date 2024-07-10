<?php 
function getEndereco($cep){
    $url = "https://viacep.com.br/ws/$cep/json/";
    $json = file_get_contents($url);
    $endereco = json_decode($json);
    return $endereco -> logradouro . ", " . $endereco -> bairro . ", " . $endereco -> localidade . " - " . $endereco -> uf;
};
?>
