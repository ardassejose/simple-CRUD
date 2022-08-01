<?php
  include_once("conexao.php");

  $idProduto = $_GET["idProduto"];

  $sql = "DELETE FROM `tbprodutos` WHERE idProduto = $idProduto";

  if ($conn->query($sql) === TRUE) {
    ?>

    <script>
      alert("Registro excluído com sucesso");
      window.location = "index.php";
    </script>

    <?php 
    } else {
    ?>

    <script>
      alert("Falha ao deletar registro");
      window.location = "selecionarProduto.php";
    </script>

    <?php 
    }
    ?>

?>