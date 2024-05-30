<?php
    $title = 'Static';
?>
<div class="titulo"><?= $title ?></div>
<?php
    class A{
        public $naoStatic = 'Variavel de instancia';
        public static $static = 'Variavel de classe(estatica)';

        public function mostrarA(){
            echo "Não estática = {$this->naoStatic}<br>";
            //tentativa 1
            //echo "Estática = {$this->static}<br>";
            //tentativa2
            //echo "Estática = {self::$static}<br>";
            //tentativa 3
            echo "Estática = " . self::$static . "<br>";
        }
        //dentro de função estatica só podemos acessar membros estaticos
        public static function mostrarStaticA(){
            echo "Estática = " . self::$static . "<br>";
        }

    }

    $objetoA = new A();
    $objetoA->mostrarA();
    //acesso a funções estáticas
    A::mostrarStaticA(); //não ideal
    echo '<br>';
    echo A::$static, '<br>'; //acessa direto pela classe
    A::$static = 'Alterado membro de classe';
    echo A::$static, '<br>';
    //O ideal é acessar membros de classe através da classe e de instância através da instância