<?php
    $title = 'Inserir Registro #01';
?>
<div class="titulo"><?= $title ?></div>

<?php
ini_set('display_errors',1);
    require_once "conexao.php";

    $sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (
            'Andreia Pereira', 
            '1989-10-29',
            'ap@zmail.com', 
            'https://ap.com.br',
             2,
             10000
        )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close(); 