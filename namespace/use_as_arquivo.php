<?php
    namespace Nome\Bem\Grande;
    $title = 'Sub Namespases';
?>
<div class="titulo"><?= $title ?></div>
<?php
    echo __NAMESPACE__ . '<br>';
    const Constante = 123;


    function soma($a,$b){
        return $a + $b;
    }

    class Classe {
        public $var;

        public function  func() {
            echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
        }
    }