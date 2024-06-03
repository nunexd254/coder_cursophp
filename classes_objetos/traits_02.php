<?php
    $title = 'Traits';
?>
<div class="titulo"><?= $title ?></div>
<?php
    trait validacao{
        public function validadarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public function validadarString($str) {
            return isset($str) && trim($str);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor;
        //dessa trait usar esse metodo e no desse
        validacaoMelhor::validadarString insteadOf validacao;

        //alias
        validacao::validadarString as validacaoSimples;
    }

    $usuario = new Usuario();
    var_dump($usuario->validadarString(' '));