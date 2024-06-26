<?php
    $title = 'Map e Filter';
?>
<div class="titulo"><?= $title ?></div>
<?php
$notas = [5.8,7.3,9.8,6.7];
$notasFinais1 = [];

foreach($notas as $nota){
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1).'<br>';

$notasFinais2 = array_map('round',$notas);
print_r($notasFinais2);

foreach($notas as $nota){
    if($nota >= 7){
        $apenasOsAprovados1[] = round($nota);
    }
}

echo '<br>';
print_r($apenasOsAprovados1);

function aprovados($nota){
    return $nota >= 7;
}
echo '<br>';

$apenasOsAprovados2 = array_filter($notas, 'aprovados');

print_r($apenasOsAprovados2);