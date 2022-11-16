<h1>rota</h1>
<?php

$sql = "SELECT * FROM rota_nitrogenio ORDER BY nome_rotaNitrogenio";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) { ?>
    <table class='table table-hover table-striped table-bordered'>
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td><?php print $row->nome_rotaNitrogenio ?></td>
                <td>
                    <button onclick=<?php print " \"location.href='?page=formRota&id=" . $row->id_rotaNitrogenio . "'\" " ?> class='btn btn-warning'>Editar</button>
                    <button onclick=<?php print "\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarRota&acao=excluir&id=" . $row->id_rotaNitrogenio . "';}else{false;}\" " ?> class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p clas="alert alert-danger">Não encontrou resultador!</p>
<?php } ?>