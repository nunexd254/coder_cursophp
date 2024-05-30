<?php
    $title = 'Traits';
?>
<div class="titulo"><?= $title ?></div>
<?php
trait validacao {
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;

}
$usuario = new Usuario();
var_dump($usuario->validarStringMelhor(' '));