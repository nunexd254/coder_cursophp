<?php
    $title = 'Datas #02';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $formatoData1 = 'D, d \d\e M \d\e Y';
    $formatoData2 = '%A, %d de %B de %Y';
    $formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';
    setlocale(LC_TIME,'pt_BR');
    $agora = new DateTime();
    print_r($agora) . '<br>';
    echo '<br>';
    echo $agora->format($formatoData1) . '<br>';

    echo strftime($formatoData2,$agora->getTimestamp()) .'<br>';
    setlocale(LC_TIME,'pt_BR');
    $amanha = new DateTime('+1 day');
    
    echo strftime($formatoData2,$amanha->getTimestamp());
    echo '<br>';
    $dataFixa = new DateTime('1975-01-25 15:30:50');
    echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

    $amanha->modify('+1 day');
    echo strftime($formatoDataHora, $amanha->getTimestamp()). '<br>';

    $amanha->setDate(2000,5,20);
    echo strftime($formatoDataHora, $amanha->getTimestamp()). '<br>';

    //comparação de datas objeto x objeto
    $dataPassada = new DateTime('2000-05-17');
    $dataFutura = new DateTime('2030-11-26');

    $outraData = new DateTime('2030-11-26');

    echo($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
    echo($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
    echo($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';

    echo '<br>';
    $tz = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(null,$tz);
    echo $agora->format('d/M/Y H:i:s');