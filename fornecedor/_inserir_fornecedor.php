<?php

$conexao   = include 'conexao.php';
$fornecedor = $_POST['nome_fornecedor'];     // recebe o valor do atributo do formulário


$sql = "INSERT INTO `fornecedores`(`nome_fornecedor`) VALUES ('$fornecedor');";

$query = mysqli_query($conexao, $sql);

require 'codigo_bootstrap.html';
?>



<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Fornecedor adicionado com sucesso!</h4>
        <div style="padding-top: 20px;"></div>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Fornecedor</a>
        <a href="listar_fornecedors.php" role="button" class="btn btn-sm btn-primary">Listar Fornecedors</a>
    </center>
</div>