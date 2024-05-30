<?php
    $title = 'Métodos mágicos';
?>
<div class="titulo"><?= $title ?></div>
<?php
    class Pessoa{
        public $nome;
        public $idade;

        public function __construct($nome, $idade)
        {
            echo 'Construtor invocado!<br>';
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function __destruct()
        {
            echo 'E morreu!<br>';
        }

        public function __toString()
        {
            return "{$this->nome} tem {$this->idade} anos.<br>";
        }

        public function apresentar() 
        {
            echo $this . "<br>";
        }
        //ele retorna caso chame um metodo que nao existe 123
        public function __get($atrib)
        {
            echo "Lendo atributo não declarado: {$atrib}<br>";
            return 123;
        }

        public function __set($atrib, $valor)
        {
            echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
        }

        public function __call($metodo, $params)
        {
            echo "Tentando executar método: ${metodo}";
            echo ", com os parametros: ";
            print_r($params);
        }
    }

    $pessoa = new Pessoa('Ricardo',40);
    $pessoa->apresentar();

    echo '<br>';
    //123
var_dump($pessoa->nomeCompleto);
echo '<br>';
$pessoa->nomeCompleto = 'Muito Legal !!!';
echo '<br>';
$pessoa->exec(1, 'teste', true, [1,2,3]);
$pessoa = null;