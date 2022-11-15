<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $desc_produto = $_POST['desc_produto'];
        $situacao_produto = $_POST['situacao_produto'];
        $id_tipoProduto = $_POST['id_tipoProduto'];
        $id_RacaProduto = $_POST['id_RacaProduto'];

        $sql = "INSERT INTO produto (desc_produto, situacao_produto, id_tipoProduto, id_RacaProduto) 
        VALUES ('{$desc_produto}','{$situacao_produto}','{$id_tipoProduto}','{$id_RacaProduto}') ";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Produto cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=produto'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=produto'</script>";
        }
        break;
    case 'editar':
        $desc_produto = $_POST['desc_produto'];
        $situacao_produto = $_POST['situacao_produto'];
        $id_tipoProduto = $_POST['id_tipoProduto'];
        $id_RacaProduto = $_POST['id_RacaProduto'];

        $sql =
            "UPDATE parceiro SET
            desc_produto='{$desc_produto}',
            situacao_produto='{$situacao_produto}',
            id_tipoProduto='{$id_tipoProduto}',
            id_RacaProduto='{$id_RacaProduto}'
        WHERE 
        id_produto=" . $_REQUEST['id'];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Produto editado com sucesso!')</script>";
            print "<script>location.href='?page=produto'</script>";
        } else {
            print "<script>alert('Não foi possível editar!')</script>";
            print "<script>location.href='?page=produto'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM produto WHERE id_produto=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Produto excluído com sucesso!')</script>";
            print "<script>location.href='?page=produto'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!')</script>";
            print "<script>location.href='?page=produto'</script>";
        }
        break;
}
