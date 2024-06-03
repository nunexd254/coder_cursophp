<?php
    namespace App;
    $title = 'Sub Namespases';
?>
<div class="titulo"><?= $title ?></div>
<?php

    echo __NAMESPACE__ . '<br>';
    const Constante = 123;
    namespace App\Principal;

    echo __NAMESPACE__ . '<br>';
    const Constante = 234;
    namespace App\Principal\Especifico;

    echo __NAMESPACE__ . '<br>';
    const Constante = 345;

    echo constant('\\' . __NAMESPACE__ . '\Constante') . '<br>';
    echo \App\Constante . '<br>';
    echo \App\Principal\Constante . '<br>';