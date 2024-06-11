<?php 

// Aqui é a pasta onde vai ficar a configuração pra ter a conexão com o servidor MySQL

$host = 'localhost';
$usuario = 'root';
$senha = '';
$dbname = 'estacio_produto';
$porta = '3306';

$conexao = mysqli_connect($host, $usuario, $senha, $dbname, $porta);

?>