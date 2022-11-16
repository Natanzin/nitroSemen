<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $desc_formaEntrega = $_POST['desc_formaEntrega'];
        $id_rotaNitrogenio = $_POST['id_rotaNitrogenio'];

        $sql = "INSERT INTO forma_entrega (desc_formaEntrega, id_rotaNitrogenio) 
        VALUES ('{$desc_formaEntrega}','{$id_rotaNitrogenio}') ";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Forma de entrega cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=formaEntrega'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=formaEntrega'</script>";
        }
        break;
    case 'editar':
        $desc_formaEntrega = $_POST['desc_formaEntrega'];
        $id_rotaNitrogenio = $_POST['id_rotaNitrogenio'];

        $sql =
            "UPDATE forma_entrega SET
            desc_formaEntrega='{$desc_formaEntrega}',
            id_rotaNitrogenio='{$id_rotaNitrogenio}'
        WHERE 
        id_formaEntrega=" . $_REQUEST['id'];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Forma de entrega editado com sucesso!')</script>";
            print "<script>location.href='?page=formaEntrega'</script>";
        } else {
            print "<script>alert('Não foi possível editar!')</script>";
            print "<script>location.href='?page=formaEntrega'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM forma_entrega WHERE id_formaEntrega=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Forma de entrega excluído com sucesso!')</script>";
            print "<script>location.href='?page=formaEntrega'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!')</script>";
            print "<script>location.href='?page=formaEntrega'</script>";
        }
        break;
}
