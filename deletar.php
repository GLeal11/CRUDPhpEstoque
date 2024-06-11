<?php

include "conexao.php";

$id = $_GET['id'];

$buscar_cadastros = "DELETE FROM produtos WHERE id = $id";

$query_cadastros = mysqli_query($conexao, $buscar_cadastros);

header('location: listagem.php');

?>