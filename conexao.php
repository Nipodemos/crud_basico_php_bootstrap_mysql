
<?php
$local_servidor = 'localhost';
$database = 'curso_estoque';
$usuario = 'root';
$senha = '';

//Criar conexão
$conexao = mysqli_connect($local_servidor, $usuario, $senha, $database);
return $conexao;
