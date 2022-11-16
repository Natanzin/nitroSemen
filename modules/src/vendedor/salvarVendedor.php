<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome_vendedor = $_POST['nome_vendedor'];

        $sql = "INSERT INTO vendedor (nome_vendedor) 
        VALUES ('{$nome_vendedor}') ";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Vendador cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=vendedor'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=vendedor'</script>";
        }
        break;
    case 'editar':
        $nome_vendedor = $_POST['nome_vendedor'];

        $sql =
            "UPDATE vendedor SET
            nome_vendedor='{$nome_vendedor}'
        WHERE 
        id_vendedor=" . $_REQUEST['id'];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Vendedor editado com sucesso!')</script>";
            print "<script>location.href='?page=vendedor'</script>";
        } else {
            print "<script>alert('Não foi possível editar!')</script>";
            print "<script>location.href='?page=vendedor'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM vendedor WHERE id_vendedor=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Vendedor excluído com sucesso!')</script>";
            print "<script>location.href='?page=vendedor'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!')</script>";
            print "<script>location.href='?page=vendedor'</script>";
        }
        break;
}
