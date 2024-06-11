<?php

include "conexao.php";

$buscar_cadastros = "SELECT * FROM produtos";

// O * indica que todos os parametros da tabela devem ser selecionados

$query_cadastros = mysqli_query($conexao, $buscar_cadastros);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastros de Alimentos</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

            <!-- AQUI COMEÇA O CSS -->
<style> 
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        border: none;
    }

    body {
        background-color: #36454F;
    }

    .header {
        display: flex;
        justify-content: center;
        padding: 1em;
    }

    h1 {
        font-family: 'Sriracha', cursive;
        color: lightgrey;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn:hover {
        cursor: pointer;
        outline-style: groove;
        outline-color: lightgrey;
    }

    #adicionar {
        background-color: darkgreen;
        padding: 1em;
        color: #F9F6EE;
        border-radius: 10px;
    }

    #deletar {
        background-color: red;
        padding: 1em;
        color:#F9F6EE;
        border-radius: 10px;
        margin-top: 0.2em;
        margin-bottom: 0.2em;
    }

    #atualizar {
        background-color: orange;
        padding: 1em;
        color:#F9F6EE;
        border-radius: 10px;
        margin-top: 0.2em;
        margin-bottom: 0.2em;
    }

    input[type="submit"] {
            font-family: 'Sriracha', cursive;
            }

</style>
<body>
<div class="header"><h1>Controle de Estoque</h1></div>

  <div class="container">
     
    <table class="table table-bordered">
        <tr>
            <!-- Função cadastrar -->
            <form action="adicionar.php" method="GET">
                <td><input type="text" name="produto" placeholder="Nome do Produto"></td>
                <td><input type="text" name="quantidade" placeholder="Quantidade do Produto"></td>
                <td><input type="text" name="datav" placeholder="Validade(AAAA-MM-DD)"></td>
                <td><input class="btn" id="adicionar" type="submit" value="Adicionar"></td>
            </form>
            
        </tr>

            <!-- AQUI COMEÇA O PHP DENTRO DO HTML -->
        <?php
         //aqui o msqli é chamado dentro do while pra buscar cada parametro
       while ($receber_dados = mysqli_fetch_array($query_cadastros)) {
            $id = $receber_dados['id'];
            $produto = $receber_dados['produto'];
            $quantidade = $receber_dados['quantidade'];
            $datav = $receber_dados['datav'];
        ?>
           
                 <!-- Função atualizar -->
           <tr class="">
                <form action="atualizar.php" method="GET">
                    <td class=""><input type="text" name ="produto" value="<?php echo $produto; ?>"></td>
                    <td class=""><input type="text" name ="quantidade" value="<?php echo $quantidade; ?>"></td>
                    <td class=""><input type="text" name ="datav" value="<?php echo $datav; ?>"></td>
                    <td class="">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input class="btn" id="atualizar" type="submit" value="Atualizar">
                    </td>
                </form>
                <td>
                 <!-- Função deletar -->
                <form action="deletar.php" method="GET" >
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input class="btn" id="deletar" type="submit" value="Deletar">
                    </form>
                </td>
            </tr>
        <?php }; ?>
    </table>
  </div>
          
                 <!-- SCRIPTS PRONTOS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

