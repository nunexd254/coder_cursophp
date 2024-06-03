<?php
    $title = 'Desafio';
?>
<div class="titulo"><?= $title ?></div>
<?php
require_once('usuario.php');
ini_set('display_errors',1);
$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);