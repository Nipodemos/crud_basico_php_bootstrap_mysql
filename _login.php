<?php
$conexao = include 'conexao.php';
include 'scripts/password.php';

$email_digitado = $_POST['email'];
$senha_digitada = $_POST['senha'];

$sql = "SELECT senha_usuario FROM usuarios WHERE email_usuario='$email_digitado'";
$query = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($query);

if ($total > 0) {
    while ($array = mysqli_fetch_array($query)) {
        $senha_vindo_do_db = $array['senha_usuario'];
        $senha_digitada_codificada = sha1($senha_digitada);

        #echo $senha_vindo_do_db . '<br>';
        #echo $senha_digitada_codificada . '<br>';

        if ($senha_vindo_do_db == $senha_digitada_codificada) {
            header("Location: pagina_inicial.php");
        } else {
            header("Location: erro.php");
        }
    }
} else {
    header("Location: erro.php");
}
