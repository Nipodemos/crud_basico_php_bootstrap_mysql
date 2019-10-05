<?php

$conexao = include '../conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id_usuario=$id";
$deletar = mysqli_query($conexao, $sql);

include '../codigo_bootstrap.html';
header("Location: aprovar_usuario.php"); //redireciona para a página de aprovação
?>

<div class="container" style="width: 400px;">
    <center>
        <h3>Deletado com sucesso</h3>
        <div style="margin-top: 10px;"></div>
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar a página inicial</a>
        <a href="inserir_usuario.php" role="button" class="btn btn-sm btn-primary" style="color: #fff;">Cadastrar novo Usuário</a>
    </center>
</div>