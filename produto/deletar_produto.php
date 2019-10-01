<?php

$conexao = include '../conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id_produto=$id";
$deletar = mysqli_query($conexao, $sql);

include 'codigo_bootstrap.html';
?>

<div class="container" style="width: 400px;">
    <center>
        <h3>Deletado com sucesso</h3>
        <div style="margin-top: 10px;"></div>
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
        <a href="produto/listar_produtos.php" role="button" class="btn btn-sm btn-primary" style="color: #fff;">Listar
            Produtos</a>
    </center>
</div>