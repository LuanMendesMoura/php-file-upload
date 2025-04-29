<?php 

$diretorioDestino = "upload/";

$imagem = $_FILES['imagem'];

$caminhoTemporario = $imagem["tmp_name"];
$caminhoDestino = $diretorioDestino . $imagem["name"];

var_dump($_FILES);

$salvou = move_uploaded_file($caminhoTemporario, $caminhoDestino);

if ($salvou) {
    echo "Arquivo salvo em $caminhoDestino";
} else {
    echo "Erro ao salvar!";
}