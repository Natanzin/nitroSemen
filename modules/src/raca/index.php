<h1>Raça</h1>
<?php

$sql = "SELECT * FROM raca_produto ORDER BY desc_racaProduto";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) { ?>
    <table class='table table-hover table-striped table-bordered'>
        <tr>
            <th>Raça</th>
            <th>Abreviação</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td><?php print $row->desc_racaProduto ?></td>
                <td><?php print $row->abrev_racaProduto ?></td>
                <td>
                    <button onclick=<?php print " \"location.href='?page=formRaca&id=" . $row->id_racaProduto . "'\" " ?> class='btn btn-warning'>Editar</button>
                    <button onclick=<?php print "\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarRaca&acao=excluir&id=" . $row->id_racaProduto . "';}else{false;}\" " ?> class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p clas="alert alert-danger">Não encontrou resultador!</p>
<?php } ?>