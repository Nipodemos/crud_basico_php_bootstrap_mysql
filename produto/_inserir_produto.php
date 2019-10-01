<?php

$conexao = include 'conexao.php';

$num_produto       = $_POST['num_produto'];   // recebe o valor do atributo do formulário
$nome_produto      = $_POST['nome_produto'];  // recebe o valor do atributo do formulário
$categoria         = $_POST['categoria'];     // recebe o valor do atributo do formulário
$quantidade        = $_POST['quantidade'];    // recebe o valor do atributo do formulário
$fornecedor        = $_POST['fornecedor'];    // recebe o valor do atributo do formulário


$sql = "INSERT INTO `produtos`(`num_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`)
        VALUES ($num_produto,'$nome_produto','$categoria',$quantidade,'$fornecedor');";

$query = mysqli_query($conexao, $sql);

require 'codigo_bootstrap.html';
?>



<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Produto Adicionado com sucesso!</h4>
        <div style="padding-top: 20px;"></div>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
        <a href="listar_produtos.php" role="button" class="btn btn-sm btn-primary">Listar Produtos</a>
    </center>
</div>