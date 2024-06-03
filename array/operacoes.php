<?php
    $title = 'Operações';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $dados1 = [
        "nome" => "José",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza",
    ];

    $dadosCompletos = $dados1 + $dados2;
    var_dump($dadosCompletos);

    //verifica se é array
    echo '<br>' . is_array($dadosCompletos);
if (is_array($dadosCompletos)){
    echo '<br>' . count($dadosCompletos);
}else{
    echo 'Não é um array';
}
echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

//remove valor do array
unset($dadosCompletos["nome"]);
var_dump($dadosCompletos);
echo '<br>';
unset($dadosCompletos);
var_dump($dadosCompletos);

echo '<br>';

$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];

$decimais = $pares + $impares; //nãp vai  funcionar

$decimais = array_merge($pares,$impares);
sort($decimais);
var_dump($decimais);