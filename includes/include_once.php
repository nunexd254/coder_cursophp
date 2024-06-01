<?php
    $title = 'Include Once';
?>
<div class="titulo"><?= $title ?></div>

<?php

include('include_once_arquivo.php');
//require('include_once_arquivo.php');

echo "Variável = '{$variavel}'<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'<br>";

include('include_once_arquivo.php');
echo "Variável = '{$variavel}'<br>";

//Não inicializa a variavel novamente os valores são mantidos
//ele sabe que o arquivo ja foi carregado e não vai recarregar
include_once('include_once_arquivo.php');
require_once('include_once_arquivo.php');