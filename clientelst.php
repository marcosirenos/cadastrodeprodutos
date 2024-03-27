<html>

<head>
    <title>Relatório de Clientes</title>
    <?php include('config.php');  ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <form action="clientelst.php?botao=gravar" method="post" name="form1">
        <table width="95%" border="1" align="center">
            <tr>
                <td colspan=5 align="center">Relatório de Clientes</td>
            </tr>
            <tr>
                <td width="9%" align="right">Código Cliente:</td>
                <td width="30%"><input type="text" name="codigoc" /></td>
                <td width="12%" align="right">Nome Cliente:</td>
                <td width="26%"><input type="text" name="nomec" size="3" /></td>
                <td width="21%"><input type="submit" name="botao" value="Gerar" /></td>
            </tr>
        </table>
    </form>

    <?php if (@$_POST['botao'] == "Gerar") { ?>

        <table width="95%" border="1" align="center">
            <tr bgcolor="#9999FF">
                <th width="25%">Código Produto</th>
                <th width="20%">Nome do Produto</th>
                <th width="10%">Quantidade Compra</th>
                <th width="10%">Data Compra</th>
                <th width="10%">Valor Total</th>
            </tr>

            <?php

            $nomea = $_POST['nomec'];
            $nomed = $_POST['nomed'];

            $query = "SELECT nomea,nomed,nota1,nota2,format((nota1+nota2)/2,1) as media
			  FROM aluno inner join cursa on aluno.matricula=cursa.matricula
              inner join disciplina on disciplina.codigo=cursa.codigo 
			  WHERE aluno.matricula > 0 ";
            $query .= ($nomea ? " AND nomea LIKE '%$nomea%' " : "");
            $query .= ($nomed ? " AND nomed LIKE '%$nomed%' " : "");
            $query .= " ORDER by aluno.matricula";
            $result = mysqli_query($mysqli, $query);

            while ($coluna = mysqli_fetch_array($result)) {

            ?>
                <tr>
                    <th width="25%"><?php echo $coluna['nomea']; ?></th>
                    <th width="20%"><?php echo $coluna['nomed']; ?></th>
                    <th width="10%"><?php echo $coluna['nota1']; ?></th>
                    <th width="10%"><?php echo $coluna['nota2']; ?></th>
                    <th width="10%"><?php echo $coluna['media']; ?></th>
                </tr>
            <?php

            } // fim while
            ?>
        </table>
    <?php
    }
    ?>
    <a href="index.html">Home </a>

</body>

</html>