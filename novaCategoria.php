<?php 
  include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar categoria</title>
</head>
<body>

  <h2>Cadastrar Categoria</h2>
  <form action="inserirCategoria.php" method="post">
    <!-- Nome do Produto -->
    <label for="txtCategoria">Nome da Categoria: </label>
    <br>
    <input type="text" name="txtCategoria" id="txtCategoria" required autofocus placeholder="Nome da nova categoria">
    <br>
    <br>
    <!-- Fim Nome do Produto-->

    <!-- Enviar/Excluir -->
    <input type="submit" value="Salvar">
    <input type="reset" value="Cancelar">
    <!-- Fim Enviar/Excluir -->
  </form>
  
</body>
</html>