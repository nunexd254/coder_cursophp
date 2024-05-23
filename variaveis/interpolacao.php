<?php
    $title = 'Interpolação';
?>
<div class="titulo"><?= $title ?></div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br> $texto"; 

$objeto = 'caneta';

echo  "<br> Eu tenho 5 $objetos";
echo  "<br> Eu tenho 5 {$objeto}s";