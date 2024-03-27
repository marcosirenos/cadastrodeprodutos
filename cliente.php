<html>

<head>
    <title>Cadastro de Clientes</title>

    <?php include('config.php');  ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <form action="cliente.php" method="post" name="trabalho_3">
        <table width="200" border="1">
            <tr>
                <td colspan="2">Cadastro de Clientes</td>
            </tr>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <td colspan="2" align="right"><input type="submit" value="Gravar" name="botao"></td>
            </tr>
        </table>
    </form>
    <?php
    if (@$_POST['botao'] == "Gravar") {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        $insere = "INSERT into cliente(nome, cpf, email) VALUES ('$nome', '$cpf', '$email')";
        mysqli_query($mysqli, $insere) or die("Não foi possivel inserir os dados");
    }
    ?>
    <a href="index.html">Home</a>
</body>

</html>