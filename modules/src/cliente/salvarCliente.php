<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome_cliente = $_POST['nome_cliente'];
        $email_cliente = $_POST['email_cliente'];
        $fone_cliente = $_POST['fone_cliente'];

        $sql = "INSERT INTO cliente (nome_cliente, email_cliente,fone_cliente) 
        VALUES ('{$nome_cliente}','{$email_cliente}','{$fone_cliente}') ";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=cliente'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=cliente'</script>";
        }
        break;
    case 'editar':
        $nome_cliente = $_POST['nome_cliente'];
        $email_cliente = $_POST['email_cliente'];
        $fone_cliente = $_POST['fone_cliente'];

        $sql =
            "UPDATE cliente SET
            nome_cliente='{$nome_cliente}',
            email_cliente='{$email_cliente}',
            fone_cliente='{$fone_cliente}'
        WHERE 
        id_cliente=" . $_REQUEST['id'];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente editado com sucesso!')</script>";
            print "<script>location.href='?page=cliente'</script>";
        } else {
            print "<script>alert('Não foi possível editar!')</script>";
            print "<script>location.href='?page=cliente'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM cliente WHERE id_cliente=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente excluído com sucesso!')</script>";
            print "<script>location.href='?page=cliente'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!')</script>";
            print "<script>location.href='?page=cliente'</script>";
        }
        break;
}
