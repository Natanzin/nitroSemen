<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome_parceiro = $_POST['nome_parceiro'];
        $percent_parceiro = $_POST['percent_parceiro'];

        $sql = "INSERT INTO parceiro (nome_parceiro, percent_parceiro) 
        VALUES ('{$nome_parceiro}','{$percent_parceiro}') ";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Parceiro cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=parceiro'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=parceiro'</script>";
        }
        break;
    case 'editar':
        $nome_parceiro = $_POST['nome_parceiro'];
        $percent_parceiro = $_POST['percent_parceiro'];

        $sql =
            "UPDATE parceiro SET
            nome_parceiro='{$nome_parceiro}',
            percent_parceiro='{$percent_parceiro}'
        WHERE 
        id_parceiro=" . $_REQUEST['id'];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Parceiro editado com sucesso!')</script>";
            print "<script>location.href='?page=parceiro'</script>";
        } else {
            print "<script>alert('Não foi possível editar!')</script>";
            print "<script>location.href='?page=parceiro'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM parceiro WHERE id_parceiro=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Parceiro excluído com sucesso!')</script>";
            print "<script>location.href='?page=parceiro'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!')</script>";
            print "<script>location.href='?page=parceiro'</script>";
        }
        break;
}
