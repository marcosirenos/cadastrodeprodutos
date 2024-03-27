<html>

<head>
  <title>Cadastro de Produtos</title>

  <?php include('config.php');  ?>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <form action="produto.php" method="post" name="produto">
    <table width="200" border="1">
      <tr>
        <td colspan="2">Cadastro de Produtos</td>
      </tr>
      <tr>
        <td width="53">Cod.</td>
        <td width="131">&nbsp;
      </tr>
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome"></td>
      </tr>
      <tr>
        <td>Quantidade em estoque:</td>
        <td><input type="number" name="qtde"></td>
      </tr>
      <tr>
        <td>Valor:</td>
        <td><input type="text" name="valor"></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><input type="submit" value="Gravar" name="botao"></td>
      </tr>
    </table>
  </form>

  <?php
  if (@$_POST['botao'] == "Gravar") {

    $nome = $_POST['nome'];
    $qtd = $_POST['qtd'];
    $valor = $_POST['valor'];

    $insere = "INSERT into produto (nomep, qtde_estoque, valor) VALUES ('$nome', '$qtd', '$valor')";
    mysqli_query($mysqli, $insere) or die("Não foi possivel inserir os dados");
  }

  ?>

  <a href="index.html">Home </a>
</body>

</html>