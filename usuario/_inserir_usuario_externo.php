<?php
$conexao = include '../conexao.php';

include '../scripts/password.php';

$nome_usuario             = $_POST['nome'];
$email_usuario            = $_POST['email'];
$senha_usuario            = $_POST['senha'];
#$nivel_de_acesso  = $_POST['nivel_de_acesso']; #não exite no usuário externo
$status = 0;
#status 0 é igual a inativo


$sql = "INSERT INTO usuarios(nome_usuario,email_usuario,senha_usuario,status_usuario) values('$nome_usuario','$email_usuario',sha1('$senha_usuario'), $status);";

$query = mysqli_query($conexao, $sql);

include '../codigo_bootstrap.html';
?>



<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Usuário Adicionado, aguarde aprovação do cadastro.</h4>
        <div style="padding-top: 20px;"></div>
        <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar para o início</a>
        <a href="inserir_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Usuario</a>
    </center>
</div>