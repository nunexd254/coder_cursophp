<?php
    $title = 'Desafio Operadores Lógicos';
?>
<div class="titulo"><?= $title ?></div>


<!--
    Dois trabalhos -> terça e quinta
    -Se os dois trabalhos forem executados -> TV 50' e sorvete
    -Se um trabalho for executado -> TV 32' e sorvete
    -Se nenhum trabalho for executado -> fica em casa
-->
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>        
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>        
    </div>
    <button>Executar</button>
</form>
<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php

    if($_POST['t1'] == '1' && $_POST['t2'] == '1'){
        echo "Vai comprar TV de 50' e tomar sorvete";
    }elseif($_POST['t1'] == '1' || $_POST['t2'] == '1'){
        echo "Vai comprar TV de 32' e tomar sorvete";
    }else{
        echo "Vai ficar em casa sem tomar sorvete";
    }