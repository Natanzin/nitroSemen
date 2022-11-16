<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome_rotaNitrogenio = $_POST['nome_rotaNitrogenio'];

        $sql = "INSERT INTO rota_nitrogenio (nome_rotaNitrogenio) 
        VALUES ('{$nome_rotaNitrogenio}') ";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Rota cadastrada com sucesso!')</script>";
            print "<script>location.href='?page=rota'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=rota'</script>";
        }
        break;
    case 'editar':
        $nome_rotaNitrogenio = $_POST['nome_rotaNitrogenio'];

        $sql =
            "UPDATE rota_nitrogenio SET
            nome_rotaNitrogenio='{$nome_rotaNitrogenio}'
        WHERE 
        id_rotaNitrogenio=" . $_REQUEST['id'];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Rota editada com sucesso!')</script>";
            print "<script>location.href='?page=rota'</script>";
        } else {
            print "<script>alert('Não foi possível editar!')</script>";
            print "<script>location.href='?page=rota'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM rota_nitrogenio WHERE id_rotaNitrogenio=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Rota excluída com sucesso!')</script>";
            print "<script>location.href='?page=rota'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!')</script>";
            print "<script>location.href='?page=rota'</script>";
        }
        break;
}
