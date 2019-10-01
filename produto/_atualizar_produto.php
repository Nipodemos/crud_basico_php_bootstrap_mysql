<?php

$conexao = include '../conexao.php';
$id_produto        = $_POST['id_produto'];   // recebe o valor do atributo do formulário
#$num_produto       = $_POST['num_produto'];   // não vai ser atualizada, portanto não vamos usar
$nome_produto      = $_POST['nome_produto'];  // recebe o valor do atributo do formulário
$categoria         = $_POST['categoria'];     // recebe o valor do atributo do formulário
$quantidade        = $_POST['quantidade'];    // recebe o valor do atributo do formulário
$fornecedor        = $_POST['fornecedor'];    // recebe o valor do atributo do formulário

$sql = "UPDATE `produtos` SET `nome_produto`=\"$nome_produto\",`categoria`=\"$categoria\",`quantidade`=$quantidade,`fornecedor`=\"$fornecedor\" WHERE id_produto=$id_produto";
$query = mysqli_query($conexao, $sql);
include 'codigo_bootstrap.html';
?>
<div class="container" style="width: 400px;">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top: 10px;"></div>
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
        <a href="produto/listar_produtos.php" role="button" class="btn btn-sm btn-primary" style="color: #fff;">Listar
            Produtos</a>
    </center>
</div>