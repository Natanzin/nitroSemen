<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $desc_racaProduto = $_POST['desc_racaProduto'];
        $abrev_racaProduto = $_POST['abrev_racaProduto'];

        $sql = "INSERT INTO raca_produto (desc_racaProduto, abrev_racaProduto) 
        VALUES ('{$desc_racaProduto}','{$abrev_racaProduto}') ";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Raça cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=raca'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=raca'</script>";
        }
        break;
    case 'editar':
        $desc_racaProduto = $_POST['desc_racaProduto'];
        $abrev_racaProduto = $_POST['abrev_racaProduto'];

        $sql =
            "UPDATE parceiro SET
            desc_racaProduto='{$desc_racaProduto}',
            abrev_racaProduto='{$abrev_racaProduto}'
        WHERE 
        id_racaProduto=" . $_REQUEST['id'];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Raça editado com sucesso!')</script>";
            print "<script>location.href='?page=raca'</script>";
        } else {
            print "<script>alert('Não foi possível editar!')</script>";
            print "<script>location.href='?page=raca'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM raca_produto WHERE id_racaProduto=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Raça excluído com sucesso!')</script>";
            print "<script>location.href='?page=raca'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!')</script>";
            print "<script>location.href='?page=raca'</script>";
        }
        break;
}
