<?php
    
    $title = 'Gerenciador de erro';
?>
<div class="titulo"><?= $title ?></div>
<?php
    ini_set('display_errors',1);
    //echo 4/0 . '<br>';
    // error_reporting(E_ERROR);

    // echo 4/0 . '<br>';

    // error_reporting(~E_ALL);
    // echo 4/0 . '<br>';

    error_reporting(E_ALL);
    echo 4/0 . '<br>';
    include 'arquivo_inexistente.php';

    function filtrarMensagem($errno,$errstring){
        $text = 'include';
        return !!strpos(" $errstring",$text);
    }

    set_error_handler('filtrarMensagem',E_WARNING);

    echo '<hr>';
    echo 4 / 0;

    include 'arquivo_inexistente.php';

