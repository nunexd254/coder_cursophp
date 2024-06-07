<?php
    $title = 'Criar Tabela';
?>
<div class="titulo"><?= $title ?></div>

<?php
     ini_set('display_errors',1);
     require_once "conexao.php";
     
 
     //DDL Data definition language
     $conexao = novaConexao(null);
     $sql = "CREATE TABLE IF NOT EXISTS cadastro (
        id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR (100) NOT NULL,
        nascimento DATE,
        email VARCHAR (100),
        site VARCHAR (100),
        filhos INT,
        salario FLOAT
     )";
     $conexao = novaConexao();

     $resultado = $conexao->query($sql);

     if($resultado){
        echo "Tabela criada com sucesso!";
     }else{
        echo "Erro: " . $conexao->error;
     }

     $conexao->close();