<?php

$conexao = include '../conexao.php';

$id    = $_GET['id'];   // recebe o valor do atributo do formulário
$nivel = $_GET['nivel'];  // recebe o valor do atributo do formulário
$sql = "UPDATE usuarios SET status_usuario=1 WHERE id_usuario=$id";

$query = mysqli_query($conexao, $sql);
header("Location: aprovar_usuario.php"); //redireciona para a página de aprovação
include '../codigo_bootstrap.html';
?>
<div class="container" style="width: 600px;">
    <center>
        <h3>Aprovado com sucesso com sucesso</h3>
        <h4>Seu nível é: <?php
                            if ($nivel == 1) {
                                echo 'Administrador';
                            } else if ($nivel == 2) {
                                echo 'Funcionário';
                            } else if ($nivel == 3) {
                                echo 'Conferente';
                            } ?></h4>
        <div style="margin-top: 10px;"></div>
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar para o início</a>
        <a href="inserir_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo usuario</a>
        <a href="listar_usuarios.php" role="button" class="btn btn-sm btn-primary" style="color: #fff;">Listar usuarios</a>
    </center>
</div>