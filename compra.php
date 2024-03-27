<html>

<head>
    <title>Compra de Produto</title>
    <?php include('config.php');  ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <form action="compra.php" method="post" name="trabalho_3">
        <table width="200" border="1">
            <tr>
                <td colspan="2">Compra de Produto</td>
            </tr>
            <tr>
                <td>Data da compra:</td>
                <td><input type="date" name="data"></td>
            </tr>
            <tr>
                <td>Quantidade de produto:</td>
                <td><input type="numeric" name="qtdproduto"></td>
            </tr>
            <tr>
                <td>Código do cliente:</td>
                <td><input type="numeric" name="codigocliente"></td>
            </tr>
            <tr>
                <td>Código do produto:</td>
                <td><input type="numeric" name="codigoproduto"></td>
            </tr>
            <td colspan="2" align="right"><input type="submit" value="Gravar" name="botao"></td>
            </tr>
        </table>
    </form>
    <?php
    if (@$_POST['botao'] == "Gravar") {

        $datacompra = $_POST['data'];
        $quantidadeproduto = $_POST['qtdproduto'];
        $codigocliente = $_POST['codigocliente'];
        $codigoproduto = $_POST['codigoproduto'];

        $insere = "INSERT into compra(data_compra,qtde_compra,codigoc,codigop) VALUES ('$data','$quantidadeproduto','$codigocliente','$codigocliente')";
        mysqli_query($mysqli, $insere) or die("Não foi possivel inserir os dados");
    }
    ?>
    <a href="index.html">Home</a>
</body>

</html>