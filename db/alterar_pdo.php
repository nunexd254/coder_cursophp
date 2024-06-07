<?php
    $title = 'Alterar Registros PDO';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    require_once "conexao_pdo.php";
    $sql = "UPDATE cadastro
    SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
    WHERE id = ?";

    $conexao = novaConexao();
    $stmt = $conexao->prepare($sql);

    $resultado = $stmt->execute([
        'Gui',
        '1980-12-12',
        'https://gui.co',
        1,
        120000,
    ]);

    if($resultado){
        echo "Sucesso";
    }else{
        var_dump($stmt->errorInfo());
    }