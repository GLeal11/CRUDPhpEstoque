<?php

include "conexao.php";

$id = $_GET['id'];
$produto = $_GET['produto'];
$quantidade = $_GET['quantidade'];
$datav = $_GET['datav'];

$buscar_cadastros = "UPDATE produtos SET produto = '$produto', quantidade = '$quantidade', datav = '$datav'  WHERE id = $id";

$query_cadastros = mysqli_query($conexao, $buscar_cadastros);

header('location: listagem.php');

?>