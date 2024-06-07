<?php
    $title = 'Criar Banco';
?>
<div class="titulo"><?= $title ?></div>

<?php
    require_once "conexao.php";
    ini_set('display_errors',1);

    $conexao = novaConexao(null);
    $sql = 'CREATE DATABASE IF NOT EXISTS curso_php';
    
    $resultado = $conexao->query($sql);
    
    if($resultado){
        echo "Banco criado com sucesso! :D" ;
    }else{
        echo "Error: ". $conexao->error;
    }
    $conexao->close();