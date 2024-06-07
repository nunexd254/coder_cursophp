<?php
    $title = 'Consultar Registros PDO';
?>
<div class="titulo"><?= $title ?></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    require_once "conexao_pdo.php";

    $conexao = novaConexao();

    $sql = "SELECT * FROM cadastro";
    //PDO::FETCH_NUM
    //PDO::FETCH_ASSOC
    //PDO::FETCH_CLASS
    $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    if($resultado){
        var_dump($resultado);
    }else{
        echo "sem resultado";
    }

    echo "<hr>";

    $sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue('qtde',2,PDO::PARAM_INT);
    $stmt->bindValue('inicio',3,PDO::PARAM_INT);

    echo "<hr>";
    var_dump(get_class_methods($stmt));
    echo "<hr>";

    if($stmt->execute()){
        $resultado = $stmt->fetchAll();
        print_r($resultado);
    }else {
        echo "Código de Erro: " . $stmt->errorCode() . "<br>";
        var_dump($stmt->errorInfo());
    }

   
    echo "<hr>";
    $sql = "SELECT * FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    if($stmt->execute([1])){
        $resultado = $stmt->fetch();
        print_r($resultado);
    }else {
        echo "Código de Erro: " . $stmt->errorCode() . "<br>";
        var_dump($stmt->errorInfo());
    }

    $conexao->close();
    

