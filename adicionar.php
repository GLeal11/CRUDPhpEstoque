<?php

include "conexao.php";

// Esse código abaixo captura o valor do parametro

$produto = $_GET['produto'];
$quantidade = $_GET['quantidade'];
$datav = $_GET['datav'];

$buscar_cadastros = "INSERT INTO produtos VALUES ('','$produto','$quantidade','$datav')";

//Aqui vai adicionar um novo registro a nossa tabela produto no SQL

$query_cadastros = mysqli_query($conexao, $buscar_cadastros);

//mysqli serve pra fazer a consulta que tem dois argumentos, conexão com o bd e a consulta SQL

header('location: listagem.php'); 

//O header serve para redirecionar pra pasta listagem


?>