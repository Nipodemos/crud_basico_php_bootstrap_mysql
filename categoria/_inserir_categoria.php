<?php

$conexao   = include '../conexao.php';
$categoria = $_POST['nome_categoria'];     // recebe o valor do atributo do formulário


$sql = "INSERT INTO `categorias`(`nome_categoria`) VALUES ('$categoria');";

$query = mysqli_query($conexao, $sql);

include '../codigo_bootstrap.html';
?>



<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Categoria adicionada com sucesso!</h4>
        <div style="padding-top: 20px;"></div>
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar para o início</a>
        <a href="inserir_categoria" role="button" class="btn btn-sm btn-primary">Cadastrar nova Categoria</a>
        <a href="listar_categorias.php" role="button" class="btn btn-sm btn-primary">Listar Categorias</a>
    </center>
</div>