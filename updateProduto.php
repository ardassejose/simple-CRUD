<?php
  include_once("conexao.php");

  $idProduto = $_POST["txtId"];
  $produto = $_POST["txtProduto"];
  $descricao = $_POST["txtDescricao"];
  $categoria = $_POST["ddlCategoria"];
  
  $sql = "UPDATE tbprodutos SET nmProduto = '$produto', descProduto = '$descricao', idCategoria = '$categoria' WHERE idProduto = $idProduto";

  // echo $sql;

  if($conn->query($sql) === TRUE) {
    ?>

    <script>
      alert("Registro atualizado com sucesso!");
      window.location = "index.php";
    </script>

    <?php
  } else {
    ?>

    <script>
      alert("Erro ao atualizar o registro!");
      window.history.back();
    </script>

    <?php
  }
    ?>
?>