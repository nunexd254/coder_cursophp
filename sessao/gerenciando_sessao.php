<?php
    
    $title = 'Gerenciando Sessão';
?>
<div class="titulo"><?= $title ?></div>
<?php
    
    session_start();
    echo session_id();

    $contador = &$_SESSION['contador'];
    $contador = $contador ? $contador + 1 : 1;
    echo '<br>' . $_SESSION['contador'];

    if($_SESSION['contador'] % 5 === 0){
        session_regenerate_id(); //sempre regerar o id para evitar roubo de sessao
    }

    if($_SESSION['contador'] >= 15){
        session_destroy();
    }