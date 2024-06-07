<?php
    $title = 'Excluir Registros';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
ini_set('display_errors',1);
    require_once "conexao.php";
    $sql = "DELETE FROM cadastro WHERE id = 3";
    $conexao = novaConexao();
    $resultado = $conexao->query($sql);
    if($resultado){
        echo "Sucesso :D";
    }else{
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();