<?php
    $title = 'Consultar Registros PDO';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    require_once "conexao_pdo.php";
    $sql = "DELETE FROM cadastro WHERE id = ?";

    $conexao = novaConexao();
    $stmt = $conexao->prepare($sql);

    if($stmt->execute([4])){
        echo "Sucesso";
    }else{
        echo "Erro: ";
        print_r($stmt->errorInfo());
    }
