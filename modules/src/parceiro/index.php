<h1>Parceiro</h1>
<?php

$sql = "SELECT * FROM parceiro ORDER BY nome_parceiro";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) { ?>
    <table class='table table-hover table-striped table-bordered'>
        <tr>
            <th>Nome</th>
            <th>% parceiro</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td><?php print $row->nome_parceiro ?></td>
                <td><?php print $row->percent_parceiro ?></td>
                <td>
                    <button onclick=<?php print " \"location.href='?page=formParceiro&id=" . $row->id_parceiro . "'\" " ?> class='btn btn-warning'>Editar</button>
                    <button onclick=<?php print "\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarParceiro&acao=excluir&id=" . $row->id_parceiro . "';}else{false;}\" " ?> class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p clas="alert alert-danger">Não encontrou resultador!</p>
<?php } ?>