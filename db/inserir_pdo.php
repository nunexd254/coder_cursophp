<?php
    $title = 'Consultar Registros';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    require_once "conexao_pdo.php";

    $sql = "INSERT INTO cadastro
    (nome, email, nascimento, site, filhos, salario)
    VALUES ('Gustavo Filho', 'df@zmail.com', '1998-7-21','https://teste.com',0,3000)";

    $conexao = novaConexao();
    //var_dump(get_class_methods($conexao));
    if($conexao->exec($sql)){
        $id = $conexao->lastInsertId();
        echo "Novo cadastro com id: {$id}";
    } else {
        echo $conexao->errorCode() . "<br>";
        print_r($conexao->errorInfo());
    }