<h1>vendedores</h1>
<?php

$sql = "SELECT * FROM vendedor ORDER BY nome_vendedor";
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
                <td><?php print $row->nome_vendedor ?></td>
                <td>
                    <button onclick=<?php print " \"location.href='?page=formVendedor&id=" . $row->id_vendedor . "'\" " ?> class='btn btn-warning'>Editar</button>
                    <button onclick=<?php print "\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarVendedor&acao=excluir&id=" . $row->id_vendedor . "';}else{false;}\" " ?> class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p clas="alert alert-danger">Não encontrou resultador!</p>
<?php } ?>