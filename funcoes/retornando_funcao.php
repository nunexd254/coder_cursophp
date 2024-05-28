<?php
    $title = 'Retornando Função';
?>
<div class="titulo"><?= $title ?></div>
<?php
    function soma($a){
        //algoritmo (30s)
        return function($b) use ($a){
            return $a + $b; //3s
        };
    }

    echo soma(3)(3);